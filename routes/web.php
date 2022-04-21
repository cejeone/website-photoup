<?php

use App\Http\Controllers\{
    PageController,
};
use App\Http\Controllers\Admin\DashboardController;
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

Route::get(
    '/localization/{language}',
    App\Http\Controllers\LocalizationController::class
)->name('localization.switch');


//admin
Route::prefix('dashboard')
    ->namespace('\App\Http\Controllers\Admin')
    ->middleware(['auth:sanctum'])
    ->group(function() {
        Route::get('/', [DashboardController::class,'index'])->name('admin-dashboard');
        Route::resource('profil', ProfilController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('kontak', KontakController::class);
        Route::resource('acara', AcaraController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('user', UserController::class);

});



//user
Route::controller(PageController::class)->group(function() {
    Route::get('/','home')->name('home');
    Route::get('/profil','profil')->name('profil');
    Route::get('/galeri','view_galeri')->name('view_galeri');
    Route::get('/kontak','kontak')->name('kontak');
    Route::get('/acara','acara')->name('acara');

    //Tautan
    Route::get('/faq','faq')->name('faq');
    Route::get('/testimonial','testi')->name('testi');
});
