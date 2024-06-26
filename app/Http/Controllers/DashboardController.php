<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
        if(auth()->user()->role != 'admin')
            return view('dashboard-user');

        $listOfAdmin = User::where('role', 'admin')->pluck('id');

        $userProfile = UserProfile::whereNot('superAdmin', '1')->get();

        // total permanant users
        $totalUsersThisYearForPermanentMember = UserProfile::where('member_type', 'tetap')->whereYear('created_at', Carbon::now()->year)->count();
        $totalUsersThisMonthForPermanentMember = UserProfile::where('member_type', 'tetap')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $totalUsersTodayForPermanentMember = UserProfile::where('member_type', 'tetap')->whereDate('created_at', Carbon::today())->count();

        // total alliance users
        $totalUsersThisYearForAllianceMember = UserProfile::where('member_type', 'bersekutu')->whereYear('created_at', Carbon::now()->year)->count();
        $totalUsersThisMonthForAllianceMember = UserProfile::where('member_type', 'bersekutu')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $totalUsersTodayForAllianceMember = UserProfile::where('member_type', 'bersekutu')->whereDate('created_at', Carbon::today())->count();

        // total visitor
        $totalVisitorToday = DB::table('ip_address_logs')->whereDate('created_at', Carbon::today())->count();
        $totalVisitorThisMonth = DB::table('ip_address_logs')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $totalVisitorThisYear = DB::table('ip_address_logs')->whereYear('created_at', Carbon::now()->year)->count();

        //dd($previousAllianceDay);
        return view('dashboard', compact(
            'userProfile', 

            'totalUsersThisYearForPermanentMember', 
            'totalUsersThisMonthForPermanentMember', 
            'totalUsersTodayForPermanentMember',

            'totalUsersThisYearForAllianceMember',
            'totalUsersThisMonthForAllianceMember',
            'totalUsersTodayForAllianceMember',

            'totalVisitorToday',
            'totalVisitorThisMonth',
            'totalVisitorThisYear',
        ));
    }

}
