<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index()
    {
        if(auth()->user()->role != 'admin' && auth()->user()->isSuperAdmin) {
            abort(403, 'Unauthorized action.');
        }

        $logs = Log::latest()->get();

        return view('log', compact('logs'));
    }
}
