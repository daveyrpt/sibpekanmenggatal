<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\Family;
class FamilyController extends Controller
{
    public function update(Request $request, $userId)
    {
        $input = $request->validate([
            'name' => 'required',
            'relation' => 'required',
        ]);

        $family = Family::create($input);
        $family->user_id = $userId;
        $family->save();

        $mainUser = User::find($userId);

        $userAccount = new User();
        $userAccount->name = $input['name'];
        $userAccount->email = $family->id . $mainUser->email;
        $userAccount->password = $mainUser->password;
        $userAccount->role = 'user';
        $userAccount->save();

        $userProfile = new UserProfile();
        $userProfile->user_id = $userAccount->id;
        $userProfile->family_id = $family->id;
        $userProfile->fullname = $input['name'];
        $userProfile->save();

        alert()->success('Success','New family member account and profile added successfully!');

        return redirect()->route('profile.edit', ['userId' =>  $userId]);    
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $family = Family::find($id);

            if (!$family) {
                throw new \Exception("Family not found");
            }

            $userProfile = UserProfile::where('family_id', $family->id)->first();

            if (!$userProfile) {
                throw new \Exception("User profile not found");
            }

            $userAccount = User::find($userProfile->user_id);

            if (!$userAccount) {
                throw new \Exception("User account not found");
            }

            $userAccount->delete();
            $userProfile->delete();
            $family->delete();

            DB::commit();

            alert()->success('Success', 'Family member account and profile deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            alert()->error('Error', $e->getMessage());
        }

        return redirect()->back();   
    }
}
