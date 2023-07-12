<?php


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\PenindakanController;
use App\Http\Controllers\PendaftaranController;

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
Route::put('/change-password', [LoginController::class, 'changePassword'])->name('change.password');


Route::resource('/admin', UserController::class)->middleware('admin');
Route::resource('/pendataan', PendataanController::class)->middleware('auth');
Route::resource('/pendaftaran', PendaftaranController::class)->middleware('auth');
Route::resource('/penindakan', PenindakanController::class)->middleware('auth');

Route::get('/dashboard', function(){
    $pendaftaran = DB::table('pendaftarans')->count();
    $pendataan = DB::table('pendataans')->count();
    $penindakan = DB::table('penindakans')->count();
    $data = [
    'content' => 'admin/dashboard/index',
    "title" => "Dashboard",
    ];
    return view('layouts.wrapper', compact ('pendaftaran', 'pendataan', 'penindakan'), $data);
});

Route::get('/jsonpendaftaran', [AjaxController::class, 'getjsonpendaftaran'])->name('jsonpendaftaran');
Route::get('/jsonpendataan', [AjaxController::class, 'getjsonpendataan'])->name('jsonpendataan');
Route::post('/validasi', [AjaxController::class, 'validasi'])->name('validasi');

Route::get('/search-pendaftaran', [PendaftaranController::class, 'search'])->name('search.pendaftaran');
Route::get('/qrcode', [QrController::class, 'generatePdfWithQrCode'])->name('qrcode');


