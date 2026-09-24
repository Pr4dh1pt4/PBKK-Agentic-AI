<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/beranda', 'beranda');
    Route::get('/profil-mahasiswa', 'profil')->name('profil');
    Route::get('/ide-agent', 'ideAgent')->name('ide-agent');
    Route::post('/ide-agent', 'submitIde')->name('ide-agent.submit');
});
