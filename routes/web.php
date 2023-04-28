<?php

use App\Http\Controllers\TinderController;
use App\Http\Controllers\ProfileController;
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

// PAGE TINDER
Route::get('/', function () {
    return view('home');
})-> name('tinder.index');

//FORMULAIRE
Route::post('/tinder',[TinderController::class, 'store'])-> name('tinder.store');

//BACK OFFICE
Route::get('/backoffice',[TinderController::class, 'backoffice'])-> name('backoffice')->middleware('auth');;

//EDIT
Route::get('/backoffice/{tinder}/edit',[TinderController::class, 'edit'])-> name('tinder.edit')->middleware('auth');

//UPDATE
Route::put('/backoffice/{tinder}',[TinderController::class, 'update'])-> name('tinder.update')->middleware('auth');

//DELETE
Route::DELETE('/backoffice/{tinder}',[TinderController::class, 'destroy'])-> name('tinder.destroy')->middleware('auth');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
