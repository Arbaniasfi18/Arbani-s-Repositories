<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function __invoke(Request $request)
    {
        if (Gate::allows('admin-only', auth()->user())) {
            return view('admin/dashboard');
        }
        return view('pages/dashboard/home');
    }

    // user
    public function profile(Request $request) {
        return view('pages/dashboard/profile');
    }
    public function competitions(Request $request) {
        return view('pages/dashboard/competitions');
    }
    // admin
    public function user_management(Request $request) {
        return view('admin/user-management');
    }
    public function competition_management(Request $request) {
        return view('admin/competition-management');
    }
    public function team_management(Request $request) {
        return view('admin/team-management');
    }
}
