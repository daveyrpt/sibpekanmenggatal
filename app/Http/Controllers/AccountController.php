<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        $userAccount = User::find(Auth::user()->id);

        return view('account-setting', compact('userAccount'));
    }

    public function update(Request $request)
    {
        $input = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8'],
        ]); 


        if ($input['password'] != $input['confirm_password']) {
            alert()->error('Update Failed','Password and confirm password does not match!');    
            return redirect()->route('account-setting.index');
        }

        $userAccount = User::find($request->userId);

        $userAccount->name = $input['username'];
        $userAccount->email = $input['email'];
        $userAccount->password = Hash::make($input['password']);
        $userAccount->save();

        alert()->success('Success','Account updated successfully!');

        return redirect()->route('account-setting.index');
    }
}
