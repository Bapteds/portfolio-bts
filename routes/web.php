<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\File;
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
    return view('accueil');
})->name('accueil');

Route::get('/mon-cv', function(){
    return view('cv');
})->name('cv');

Route::get('/mon-bts', function(){
    return view('bts');
})->name('bts');

Route::get('/realisations',function(){
    return view('realisations');
})->name('realisations');

Route::controller(ImagesController::class)->group(function(){
    Route::get('/realisation/image/{real}','index')->name('realisations.image');
});