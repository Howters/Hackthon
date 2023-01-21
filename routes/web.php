<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Models\Group;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MemberController;

use Illuminate\Support\Facades\Auth;

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
    return view('homepage');
})->name('homepage');

Route::get('/email', [EmailController::class,'index'])->name('email');
Route::get('/register', function () {
    return view('register');})->name('register');



    Route::middleware(['login'])->group(function () {
        Route::get('/dashboard',function(){

            $group = Auth::user();
            $count =1;
        return view('dashboard', compact('group','count')); })->name('dashboard');
        // Route::get('/dashboard', 'DashboardController@index');
        Route::get('/payment',function(){$group = Auth::user();return view('payment' , compact('group'));})->name('payment');
        Route::get('/timeline',function(){return view('timeline'); })->name('timeline');
        Route::get('/logout',function(){return view('logout'); })->name('logout');              
        Route::post('/log-out',[LoginController::class,'logout'])->name('log-out');
        });
        Route::middleware(['haslogin'])->group(function () {
            Route::post('/store-group',[GroupController::class,'store'])->name('store-group');;
            Route::post('/store-leader',[LeaderController::class,'store'])->name('store-leader');
            Route::post('/store-bukti',[LeaderController::class,'edit'])->name('store-bukti');
            Route::post('/store-member',[MemberController::class,'store'])->name('store-member');
        Route::get('/login',function(){return view('login');})->name('login');
    });
    
    Route::post('/login-auth',[LoginController::class,'login'])->name('login-auth');


Route::middleware(['login'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('adminDashboard');
    Route::get('/admin-participant', [AdminController::class, 'indexPar'])->name('adminParticipant');
    Route::get('/admin-show-participant/{id}', [AdminController::class, 'showPart'])->name('adminShow');
    Route::get('/search-participant', [AdminController::class, 'searchPart'])->name('search');
    Route::get('/search-dashboard', [AdminController::class, 'searchDash'])->name('searchAdmin');
    Route::get('/admin-participant-alp', [AdminController::class, 'sortAlpha'])->name('sortAlphabet');
    Route::get('/admin-participant-time', [AdminController::class, 'sortTime'])->name('sortTime');
    Route::get('/admin-participant-verified', [AdminController::class, 'filterVerified'])->name('verfied');
    Route::get('/admin-participant-unverified', [AdminController::class, 'filterunVerified'])->name('unverfied');
    Route::patch('/team-verify/{id}', [AdminController::class, 'verify']);
    Route::delete('/delete-team/{id}', [AdminController::class, 'delete']);
});



