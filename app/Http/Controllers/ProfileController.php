<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\Log;

class ProfileController extends Controller
{
    public function index($userId)
    {
        if (auth()->user()->role != 'admin' && auth()->user()->id != $userId && auth()->user()->id != 1 && UserProfile::where('user_id', $userId)->first()->manage_by != auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        $userAccount = User::find($userId);

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userFamily = UserProfile::where('manage_by', $userId)->get();

        if (!$userAccount || !$userProfile) {
            abort(404);
        }

        return view('profile.index', compact('userAccount', 'userProfile', 'userFamily'));
    }

    public function create()
    {
        if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        return view('profile.create');
    }

    public function store(Request $request)
    {
        if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $input = $request->validate([
            'username' => 'nullable',
            'email' => ['nullable', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8'],
            'confirm_password' => ['nullable', 'string', 'min:8', 'same:password']
        ]);

        if (!$input['username']) {
            $input['username'] = Str::random(6);
        }

        if (!$input['email']) {
            $input['email'] = Str::random(6) . '@sibpm.com';
        }

        if (!$input['password']) {
            $input['password'] = Hash::make(Str::random(8));
        }

        $inputforProfile = $request->validate($this->validationRules());

        $userAccount = new User();
        $userAccount->name = $input['username'];
        $userAccount->email = $input['email'];
        $userAccount->password = Hash::make($input['password']);
        $userAccount->role = 'user';
        $userAccount->save();

        $userProfile = UserProfile::create($inputforProfile);
        $userProfile->user_id = $userAccount->id;
        $userProfile->save();

        if($request->hasFile('profile_img')) {
            // get file format
            $profile_img_file = $request->file('profile_img');

            // move file to public 
            $profile_img_file->move(public_path('images/profile'), $userProfile->id . '.' . $profile_img_file->getClientOriginalExtension());

            // update profile image on user profile
            $userProfile->original_profile_img = $profile_img_file->getClientOriginalName();
            $userProfile->profile_img = $userProfile->id . '.' . $profile_img_file->getClientOriginalExtension();
            $userProfile->update();   
        }

        # add family member to User and UserProfile table
        if (is_array($request->input('family'))) {
            foreach ($request->input('family') as $family) {
                $user_family = User::create([
                    'name' => $family['name'],
                    'email' => Str::random(6) . '@sibpm.com',
                    'password' => Hash::make(Str::random(8)),
                ]);

                UserProfile::create([
                    'user_id' => $user_family->id,
                    'manage_by' => $userProfile->id,
                    'fullname' => $family['name'],
                    'relationship' => $family['relationship'],
                ]);
            }
        }

        Log::create([
            'causer_id' => Auth::user()->id,
            'description' => LOG::CREATE_ACCOUNT,
            'target_id' => $userAccount->id
        ]);

        alert()->success(__('message.success'), __('message.new member added successfully'));

        return redirect()->route('profile.index', ['userId' => $userAccount->id]);
    }

    public function edit($userId)
    {
        if (auth()->user()->role != 'admin' && auth()->user()->id != $userId && UserProfile::where('user_id', $userId)->first()->manage_by != auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        $userAccount = User::find($userId);

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userFamily = UserProfile::where('manage_by', $userId)->get();

        if (!$userAccount || !$userProfile) {
            abort(404);
        }

        return view('profile.edit', compact('userAccount', 'userProfile', 'userFamily'));
    }

    public function update(Request $request, $userId)
    {
        if (auth()->user()->role != 'admin' && auth()->user()->id != $userId && UserProfile::where('user_id', $userId)->first()->manage_by != auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        $input = $request->validate($this->validationRules());

        $userProfile = UserProfile::updateOrCreate(
            ['user_id' => $userId],
            $input
        );

        if($request->hasFile('profile_img')) {
            // get file format
            $profile_img_file = $request->file('profile_img');

            // move file to public 
            $profile_img_file->move(public_path('images/profile'), $userProfile->id . '.' . $profile_img_file->getClientOriginalExtension());

            // update profile image on user profile
            $userProfile->original_profile_img = $profile_img_file->getClientOriginalName();
            $userProfile->profile_img = $userProfile->id . '.' . $profile_img_file->getClientOriginalExtension();
            $userProfile->update();   
        }

        # update family member to User and UserProfile table
        if (is_array($request->input('family'))) {
            foreach ($request->input('family') as $family) {
                if($family['name'] == NULL || $family['relationship'] == NULL) {
                    continue;
                }

                $user_family = User::updateOrCreate(['id' => $family['id']],[
                    'name' => $family['name'],
                    'email' => Str::random(6) . '@sibpm.com',
                    'password' => Hash::make(Str::random(8)),
                ]);

                UserProfile::updateOrCreate(
                    ['user_id' => $user_family->id],
                    [
                        'manage_by' => $userProfile->id, 
                        'fullname' => $family['name'],
                        'relationship' => $family['relationship'],
                    ]
                );
            }
        }

        Log::create([
            'causer_id' => Auth::user()->id,
            'description' => LOG::UPDATE_PROFILE,
            'target_id' => $userProfile->user_id,
        ]);

        alert()->success(__('message.success'), __('message.profile updated successfully'));

        return redirect()->route('profile.index', ['userId' => $userId]);
    }

    public function destroy($userId)
    {
        if (auth()->user()->role != 'admin' && UserProfile::where('user_id', $userId)->first()->manage_by != auth()->user()->id)
            abort(403, 'Unauthorized action.');

        $userAccount = User::find($userId);

        if ($userAccount->superAdmin == 1) {
            alert()->error(__('message.failed'), __('message.superadmin cannot be deleted'));

            Log::create([
                'causer_id' => Auth::user()->id,
                'description' => LOG::DELETE_SUPERADMIN,
                'target_id' => $userAccount->id
            ]);

            return redirect()->back();
        }

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userAccount->delete();

        $userProfile->delete();

        Log::create([
            'causer_id' => Auth::user()->id,
            'description' => LOG::DELETE_ACCOUNT . ' ' . $userProfile->fullname,
            'target_id' => null
        ]);

        alert()->success(__('message.success'), __('message.user deleted successfully'));

        return redirect()->back();
    }

    public function destroyImage($id)
    {
        $profile = UserProfile::find($id);

        $profile->original_profile_img = null;
        $profile->profile_img = null;

        $profile->update();

        Log::create([
            'causer_id' => Auth::user()->id,
            'description' => LOG::REMOVE_PROFILE_IMG . ' ' . $profile->fullname,
            'target_id' => $profile->user_id
        ]);

        alert()->success(__('message.success'), __('message.profile image deleted successfully'));

        return redirect()->back();
    }


    protected function validationRules(UserProfile $user = null, array $only = []): array
    {
        $rules = [
            'fullname' => ['required'],
            'date_of_birth' => ['nullable', 'date'],
            'age' => ['nullable', 'numeric'],
            'address' => ['nullable'],
            'city' => ['nullable'],
            'state' => ['nullable'],
            'zip' => ['nullable', 'numeric'],
            'phone' => ['nullable'],
            'occupation' => ['nullable'],
            'gender' => ['nullable'],
            'member_type' => ['nullable'],
            'member_code' => ['nullable'],
            'original_church' => ['nullable'],
            'baptize_date' => ['nullable', 'date'],
            'begin_year' => ['nullable', 'numeric'],
            'profile_img' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];

        return count($only) ? Arr::only($rules, $only) : $rules;
    }

}
