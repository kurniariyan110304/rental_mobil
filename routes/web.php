<?php
namespace App\Http\Controllers;
use App\Http\Controllers\MobilController;
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

Route::get('/welcome',function(){
    echo "Selamat Datang di Laravel";
});

Route::get('greeting', function(){
    return view('greeting');
});

Route::get('/mobil',[MobilController::class, 'index']);
Route::get('/mobil/create', [MobilController::class, 'create']);
Route::post('/mobil/simpan-data', [MobilController::class, 'store']);

Route::get('/merk', [MerkController::class, 'index']);
Route::get('/merk/create',[MerkController::class,'create']);
Route::post('/merk/simpan-data',[MerkController::class,'store']);
Route::get('/merk/edit/{id}', [MerkController::class, 'edit']);
Route::post('/merk/update/{id}', [MerkController::class, 'update']);
Route::get('/merk/delete/{id}', [MerkController::class, 'delete']);

Route::get('/tipemobil', [TipeMobilController::class, 'index']);
Route::get('/tipemobil/create', [TipeMobilController::class, 'create']);
Route::post('/tipemobil/simpan-data', [TipeMobilController::class, 'store']);
Route::get('/tipemobil/edit/{id}', [TipeMobilController::class, 'edit']);
Route::post('/tipemobil/update/{id}', [TipeMobilController::class, 'update']);
Route::get('/tipemobil/delete/{id}', [TipeMobilController::class, 'delete']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/simpan-data', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);
