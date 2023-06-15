<?php

use App\Http\Controllers\EmergencyCardController;
use Illuminate\Support\Facades\Route;
Route::get('/', [EmergencyCardController::class, 'index'])->name('index');
// Route::get('index','EmergencyCardController@index');

Route::get('/evacuation', [EmergencyCardController::class, 'evacuation'])->name('evacuation');

Route::get('/emgmeeting', [EmergencyCardController::class, 'emgmeeting'])->name('emgmeeting');

Route::get('/famcard',[EmergencyCardController::class, 'famcard'])->name('famcard');

Route::get('/learnemp',[EmergencyCardController::class,'learnemp'])->name('learnemp');

Route::get('/alreadyplan', [EmergencyCardController::class, 'alreadyplan'])->name('alreadyplan');

Route::get('/alreadyplannum', [EmergencyCardController::class, 'alreadyplannum'])->name('alreadyplannum');

Route::get('/displaypdf', [EmergencyCardController::class, 'displaypdf'])->name('displaypdf');

Route::get('/existingplan', [EmergencyCardController::class, 'existingplan'])->name('existingplan');

Route::get('/welcome', function () {
     return view('welcome');
});


Route::get('/pdf', function () {
    return view('pdf');
});

Route::post('/store', [EmergencyCardController::class, 'store'])->name('store');

// Route::get('welcome','EmergencyCardController@welcome');
