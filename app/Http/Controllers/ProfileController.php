<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserProfile;

class ProfileController extends Controller
{
    public function index()
    {
        $userAccount = User::where('id', Auth::user()->id)->first();

        $userProfile = UserProfile::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('userAccount', 'userProfile'));
    }

    public function view($userId)
    {
        $userAccount = User::where('id', $userId)->first();

        $userProfile = UserProfile::where('id', $userId)->first();

        return view('profile.index', compact('userAccount', 'userProfile'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8'],
            'fullname' => 'nullable',
        ]); 

        if ($input['password'] != $input['confirm_password']) {
            alert()->error('Create Failed','Password and confirm password does not match!');    
            return redirect()->route('profile.index');
        }

        $userAccount = new User();
        $userAccount->name = $input['username'];
        $userAccount->email = $input['email'];
        $userAccount->password = Hash::make($input['password']);
        $userAccount->role = 'user';
        $userAccount->save();

        $userProfile = new UserProfile;
        $userProfile->user_id = $userAccount->id;
        $userProfile->fullname = $input['fullname'];
        $userProfile->save();

        alert()->success('Success','New member added successfully!');

        return redirect()->route('profile.view', ['userId' =>  $userAccount->id]);
    }

    public function edit($userId)
    {
        # todo only allow only user to check their own profile
        $userAccount = User::where('id', $userId)->first();

        $userProfile = UserProfile::where('user_id', $userId)->first();

        return view('profile.edit', compact('userAccount', 'userProfile'));
    }

    public function update(Request $request, $userId) 
    {
        $input = $request->validate([
            'fullname' => 'required',
        ]);

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userProfile->fullname = $input['fullname'];

        $userProfile->save();

        alert()->success('Success','Profile updated successfully!');

        return redirect()->route('profile.view', ['userId' => $userId]);
    }

    public function destroy($userId)
    {
        $userAccount = User::where('id', $userId)->first();

        $userProfile = UserProfile::where('user_id', $userId)->first();

        $userAccount->delete();

        $userProfile->delete();

        alert()->success('Success','User deleted successfully!');

        return redirect()->route('home.index');
    }
}
