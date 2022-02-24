<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\DashboardController;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('login');
});


//Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/bookappointment', [AppointmentController::class, 'store'])->middleware(['auth'])->name('bookappointment');

Route::get('/appointmentbooked', [AppointmentController::class, 'index'])->middleware(['auth'])->name('appointment');

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('adminaction', [DashboardController::class, 'takeAction'])->name('adminaction');



});





// Route::post('/bookappointment', function (){
//     return 001;
// })->name('bookappointment');



