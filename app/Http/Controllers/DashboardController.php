<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\UserProfile;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        $userProfile = UserProfile::all();

        // total permanant users
        $totalUsersThisYearForPermanentMember = UserProfile::where('member_type', 'tetap')->whereYear('created_at', Carbon::now()->year)->count();
        $totalUsersThisMonthForPermanentMember = UserProfile::where('member_type', 'tetap')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $totalUsersTodayForPermanentMember = UserProfile::where('member_type', 'tetap')->whereDate('created_at', Carbon::today())->count();

        // percentage increase
        $previousPermanentYear = UserProfile::where('member_type', 'tetap')->whereYear('created_at', Carbon::now()->subYear()->year)->count();
        $previousPermanentMonth = UserProfile::where('member_type', 'tetap')->whereYear('created_at', Carbon::now()->subMonth()->year)->whereMonth('created_at', Carbon::now()->subMonth()->month)->count();
        $previousPermanentDay = UserProfile::where('member_type', 'tetap')->whereDate('created_at', Carbon::now()->subDay()->day)->count();

        $percentagePermanentIncreaseYear = $percentagePermanentIncreaseMonth = $percentagePermanentIncreaseDay = 0;

        if ($previousPermanentYear > $totalUsersThisYearForPermanentMember) {
            $percentagePermanentIncreaseYear = (($previousPermanentYear - $totalUsersThisYearForPermanentMember) / $previousPermanentYear) * 100;
        }

        if ($previousPermanentMonth > $totalUsersThisMonthForPermanentMember) {
            $percentagePermanentIncreaseMonth = (($previousPermanentMonth - $totalUsersThisMonthForPermanentMember) / $previousPermanentMonth) * 100;
        }

        if ($previousPermanentDay > $totalUsersTodayForPermanentMember) {
            $percentagePermanentIncreaseDay = (($previousPermanentDay - $totalUsersTodayForPermanentMember) / $previousPermanentDay) * 100;
        }

        // total alliance users
        $totalUsersThisYearForAllianceMember = UserProfile::where('member_type', 'bersekutu')->whereYear('created_at', Carbon::now()->year)->count();
        $totalUsersThisMonthForAllianceMember = UserProfile::where('member_type', 'bersekutu')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $totalUsersTodayForAllianceMember = UserProfile::where('member_type', 'bersekutu')->whereDate('created_at', Carbon::today())->count();

        // percentage increase
        $previousAllianceYear = UserProfile::where('member_type', 'bersekutu')->whereYear('created_at', Carbon::now()->subYear()->year)->count();
        $previousAllianceMonth = UserProfile::where('member_type', 'bersekutu')->whereYear('created_at', Carbon::now()->subMonth()->year)->whereMonth('created_at', Carbon::now()->subMonth()->month)->count();
        $previousAllianceDay = UserProfile::where('member_type', 'bersekutu')->whereDate('created_at', Carbon::now()->subDay()->day)->count();

        $percentageAllianceIncreaseYear = $percentageAllianceIncreaseMonth = $percentageAllianceIncreaseDay = 0;

        if ($previousAllianceYear > $totalUsersThisYearForAllianceMember) {
            $percentageAllianceIncreaseYear = (($previousAllianceYear - $totalUsersThisYearForAllianceMember) / $previousAllianceYear) * 100;
        }

        if ($previousAllianceMonth > $totalUsersThisMonthForAllianceMember) {
            $percentageAllianceIncreaseMonth = (($previousAllianceMonth - $totalUsersThisMonthForAllianceMember) / $previousAllianceMonth) * 100;
        }

        if ($previousAllianceDay > $totalUsersTodayForAllianceMember) {
            $percentageAllianceIncreaseDay = (($previousAllianceDay - $totalUsersTodayForAllianceMember) / $previousAllianceDay) * 100;
        }

        return view('dashboard', compact(
            'userProfile', 
            'totalUsersThisYearForPermanentMember', 
            'totalUsersThisMonthForPermanentMember', 
            'totalUsersTodayForPermanentMember',
            'totalUsersThisYearForAllianceMember',
            'totalUsersThisMonthForAllianceMember',
            'totalUsersTodayForAllianceMember',
            'percentagePermanentIncreaseYear',
            'percentagePermanentIncreaseMonth',
            'percentagePermanentIncreaseDay',
            'percentageAllianceIncreaseYear',
            'percentageAllianceIncreaseMonth',
            'percentageAllianceIncreaseDay'
        ));
    }

}
