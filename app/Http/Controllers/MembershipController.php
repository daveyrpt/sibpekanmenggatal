<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        return view('membership.index');
    }

    public function profile()
    {
        return view('membership.profile');
    }

    public function create()
    {
        return view('membership.create');
    }
}
