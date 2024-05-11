<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserProfile;

class ProfileController extends Controller
{
    public function index($userId)
    {
        if(auth()->user()->role != 'admin' && auth()->user()->id != $userId) {
            abort(403, 'Unauthorized action.');
        }

        $userAccount = User::find($userId);

        $userProfile = UserProfile::where('user_id', $userId)->first();

        if(!$userAccount || !$userProfile) {
            abort(404);
        }

        return view('profile.index', compact('userAccount', 'userProfile'));
    }

    public function create()
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        return view('profile.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $input = $request->validate([           
            'username' => 'nullable',
            'email' => ['nullable', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8'],
            'confirm_password' => ['nullable', 'string', 'min:8', 'same:password']
        ]);

        if(!$input['username']) {
            $input['username'] = Str::random(6);
        }

        if(!$input['email']) {
            $input['email'] = Str::random(6) . '@random.com';
        }

        if(!$input['password']) {
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
        $userProfile->family = $request->input('family');
        $userProfile->save();

        alert()->success( __('message.success'), __('message.new member added successfully'));

        return redirect()->route('profile.index', ['userId' =>  $userAccount->id]);
    }

    public function edit($userId)
    {
        if(auth()->user()->role != 'admin' && auth()->user()->id != $userId) {
            abort(403, 'Unauthorized action.');
        }

        $userAccount = User::find($userId);

        $userProfile = UserProfile::where('user_id', $userId)->first();

        if(!$userAccount || !$userProfile) {
            abort(404);
        }

        return view('profile.edit', compact('userAccount', 'userProfile'));
    }

    public function update(Request $request, $userId) 
    {
        if(auth()->user()->role != 'admin' && auth()->user()->id != $userId) {
            abort(403, 'Unauthorized action.');
        }

        $input = $request->validate($this->validationRules());

        $userProfile = UserProfile::updateOrCreate(
            ['user_id' => $userId],
            ['family' => $request->input('family')],
        );

        $userProfile->update($input);

        alert()->success( __('message.success'), __('message.profile updated successfully'));

        return redirect()->route('profile.index', ['userId' => $userId]);
    }

    public function destroy($userId)
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $userAccount = User::find($userId);

        if($userAccount->superAdmin == 1) {
            alert()->error( __('message.failed'), __('message.superadmin cannot be deleted'));
            info('Cubaan penukaran peranan kepada akaun ini dibuat oleh ' . Auth::user()->name);
            return redirect()->back();
        }

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userAccount->delete();

        $userProfile->delete();

        alert()->success( __('message.success'), __('message.user deleted successfully'));

        return redirect()->route('home.index');
    }

    protected function validationRules(UserProfile $user = null, array $only = []): array
    {
        $rules = [
            'fullname' => ['required'],
            'date_of_birth' => ['nullable', 'date'],
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
        ];

        return count($only) ? Arr::only($rules, $only) : $rules;
    }
}
