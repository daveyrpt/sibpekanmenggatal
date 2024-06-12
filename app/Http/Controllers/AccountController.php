<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Log;

class AccountController extends Controller
{
    public function index()
    {
        $userAccount = User::find(Auth::user()->id);

        return view('account-setting', compact('userAccount'));
    }

    /* UPDATE OWN PROFILE */
    public function updateOwnProfile(Request $request)
    {
        $input = $request->validate([
            'username' => 'required',
            'email' => ['required'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8', 'same:password']
        ]); 

        if ($input['password'] != $input['confirm_password']) {
            alert()->success( __('message.failed'), __('message.password and confirm password does not match')); 
            return redirect()->route('account-setting.index');
        }

        $userAccount = User::find($request->userId);

        $userAccount->name = $input['username'];
        $userAccount->email = $input['email'];
        $userAccount->password = Hash::make($input['password']);
        $userAccount->save();

        Log::create([
            'causer_id' => Auth::user()->id,
            'description' => LOG::UPDATE_ACCOUNT,
            'target_id' => $userAccount->id
        ]);

        alert()->success( __('message.success'), __('message.information successfully updated'));

        return redirect()->back();
    }

    /*  ADMIN UPDATE OTHER PROFILE */
    public function updateUserProfile(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => ['required'],
            'password' => ['nullable', 'string', 'min:8'],
            'confirm_password' => ['nullable', 'string', 'min:8', 'same:password'],
            'role' => 'required'
        ]); 

        $userAccount = User::find($request->userId);

        if($userAccount->superAdmin == 1 && $input['role'] == 'user') {
            alert()->error( __('message.failed'), __('message.superadmin cannot be changed'));
            info('Cubaan penukaran peranan kepada akaun ini dibuat oleh ' . Auth::user()->name);
            return redirect()->back();
        }

        $userAccount->name = $input['name'];
        $userAccount->email = $input['email'];
        $userAccount->role = $input['role'];

        if($input['password']) {
            $userAccount->password = Hash::make($input['password']);
        }
    
        $userAccount->save();

        Log::create([
            'causer_id' => Auth::user()->id,
            'description' => LOG::UPDATE_ACCOUNT,
            'target_id' => $userAccount->id
        ]);

        alert()->success( __('message.success'), __('message.information successfully updated'));

        return redirect()->back();
    }
}
