<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\PenindakanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AjaxController;

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
    return view('home', [
        "title" => "Home",
    ]);
})->middleware('guest');

Route::get('/penindakan', function () {
    return view('penindakan', [
        "title" => "Penindakan",
    ]);
})->middleware('auth')->name("penindakan");

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "name" => "Muh. Ramli Massa",
        "nim"  => "1829041061",
        "kelas"=> "PTIK F 18",
        "whatsapp" => "081523694038",
        "email" => "mramlimassa@gmail.com",
        "image" => "ramli.jpg"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/admin', UserController::class)->middleware('admin');
Route::resource('/pendataan', PendataanController::class)->middleware('auth');
Route::resource('/pendaftaran', PendaftaranController::class)->middleware('auth');
Route::resource('/penindakan', PenindakanController::class)->middleware('auth');

Route::get('/dashboard', function(){
    $data = [
    'content' => 'admin/dashboard/index'
    ];
    return view('layouts.wrapper', $data, [
        "title" => "Dashboard",
    ]);
});

Route::get('pendaftaran/{id}/details', 'pendaftaranController@details')->name('pendaftaran.details');
Route::get('/jsonpendaftaran', [AjaxController::class, 'getjsonpendaftaran'])->name('jsonpendaftaran');
Route::post('/validasi', [AjaxController::class, 'validasi'])->name('validasi');



// pendaftarant('/pendataan/create}', [PendataanController::class, "create"])->name('pendataan')->middleware('auth');
// Route::get('admin/invoice/create','InvoiceController@create');
// Route::get('admin/api/product','InvoiceController@getAutocompleteData'); 