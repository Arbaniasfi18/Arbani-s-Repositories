<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\Profile\ProfileController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/homepage');
});

Route::get('/competitions', [CompetitionController::class, 'index'])->name('competitions');
Route::get('/competitions/detail', [CompetitionController::class, 'detail'])->name('competition-detail');
// Route::get('/competitions/{slug}', [CompetitionController::class, 'detail'])->name('competition-detail');

Route::get('/grand-event', function () {
    return view('pages/grand-event');
});

Auth::routes(['verify' => true]);

// user
Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');

Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');

Route::get('/dashboard/competitions', [DashboardController::class, 'competitions'])->name('dashboard.competitions');

// ubah profile 

Route::post('/change-profile', [ProfileController::class, 'change_profile']);

Route::post('/change-password', [ProfileController::class, 'change_password']);

Route::post('/change-email', [ProfileController::class, 'change_email']);

Route::post('/change-image', [ProfileController::class, 'change_image']);





// admin
Route::get('/dashboard/user-management', [DashboardController::class, 'user_management'])->name('dashboard.user_management');

Route::get('/dashboard/competition-management', [DashboardController::class, 'competition_management'])->name('dashboard.competition_management');

Route::get('/dashboard/team-management', [DashboardController::class, 'team_management'])->name('dashboard.team_management');
