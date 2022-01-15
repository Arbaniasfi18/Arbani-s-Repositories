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
        return view('pages/dashboard/dashboard');
    }
}
