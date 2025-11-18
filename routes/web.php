<?php

use App\Http\Controllers\AdminControllers;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/', [AdminControllers::class,'home']);

Route::get('/home',[AdminControllers::class,'index'])->name('home');

Route::get('/shop',[AdminControllers::class,'shop'])->name('shop');

Route::get('/details',[AdminControllers::class,'details'])->name('details');

Route::get('/contact',[AdminControllers::class,'contact'])->name('contact');

Route::get('/create_game', [AdminControllers::class,'create_game']);

Route::post('/tambah_game', [AdminControllers::class,'tambah_game']);

Route::get('/data_game', [AdminControllers::class,'data_game']);

Route::get('/update_game/{id}', [AdminControllers::class,'update_game']);

Route::post('/edit_game/{id}', [AdminControllers::class,'edit_game']);

Route::get('/delete_game/{id}', [AdminControllers::class,'delete_game']);

