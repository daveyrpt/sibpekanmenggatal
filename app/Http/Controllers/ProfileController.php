<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
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
        //dd($request->all());
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

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
        //dd($request->all());
        $input = $request->validate($this->validationRules());

        $userProfile = UserProfile::updateOrCreate(
            ['user_id' => $userId],
            ['family' => $request->input('family')],
            $input
        );

        alert()->success( __('message.success'), __('message.profile updated successfully'));

        return redirect()->route('profile.index', ['userId' => $userId]);
    }

    public function destroy($userId)
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

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
            'fullname' => ['nullable'],
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
