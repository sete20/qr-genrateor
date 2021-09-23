<?php

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

Route::get('/',[App\Http\Controllers\qrController::class,'index']);
Route::post('/qr-builder',[App\Http\Controllers\qrController::class,'create'])->name('qr.builder');
route::get('/wifi',function(){
    $wifi=\QrCode::wiFi([
        'encryption' => 'wpa',
        'ssid' => 'private',
        'password' => '123456789',
        'hidden' => 'true'
    ]);
    return view('qr_codes.qr_builder_wifi',compact('wifi'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
