<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\Family;

class ProfileController extends Controller
{
    public function index($userId)
    {
        $userAccount = User::find($userId);

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userFamily = Family::where('user_id', $userId)->get()->toArray();

        return view('profile.index', compact('userAccount', 'userProfile', 'userFamily'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([           
            'username' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8', 'same:password']
        ]);

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

        alert()->success( __('message.success'), __('message.new member added successfully'));

        return redirect()->route('profile.index', ['userId' =>  $userAccount->id]);
    }

    public function edit($userId)
    {
        # todo only allow only user to check their own profile
        $userAccount = User::find($userId);

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userFamily = Family::where('user_id', $userId)->get()->toArray();

        return view('profile.edit', compact('userAccount', 'userProfile', 'userFamily'));
    }

    public function update(Request $request, $userId) 
    {
        $input = $request->validate($this->validationRules());

        $userProfile = UserProfile::updateOrCreate(
            ['user_id' => $userId],
            $input
        );

        alert()->success( __('message.success'), __('message.profile updated successfully'));

        return redirect()->route('profile.index', ['userId' => $userId]);
    }

    public function destroy($userId)
    {
        $userAccount = User::find($userId);

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
            
        ];

        return count($only) ? Arr::only($rules, $only) : $rules;
    }
}
