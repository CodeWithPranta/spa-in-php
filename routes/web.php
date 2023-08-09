<?php

use App\Http\Controllers\GeneralController;
use App\Livewire\Counter;
use App\Livewire\Job;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Job::class);
Route::get('/count', Counter::class);
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

// Traditional Routes
Route::post('/logout', [GeneralController::class, 'logout'])->name('user.logout');

