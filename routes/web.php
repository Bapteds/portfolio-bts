<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;

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
/*
Route::get('/mon-bts', function(){
    return view('bts');
})->name('bts');
*/
Route::get('/realisations',function(){
    return view('realisations');
})->name('realisations');

Route::controller(ImagesController::class)->group(function(){
    Route::get('/realisation/image/{real}','index')->name('realisations.image');
});

Route::get('/mon-cv-pdf',function(){
    $file = public_path('BAPTISTE-CV.pdf');
    return Response::download($file,'BATISTE-ERADES.pdf');
})->name('get-cv');

Route::get('/ma-veille-technologique',function(){
    return view('veille-techno');
})->name('veille-techno');
