<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlackjackController;
use App\Http\Controllers\PagesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/oferta-sorteada', function () {
    return view('upsell.upsell');
});

Route::get('/obrigado', function () {
    return view('obrigado');
});


Route::get('/termos', function () {
    return view('termos');
});

Route::get('/politicas', function () {
    return view('politicas');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/blackjack/data', [BlackjackController::class, 'calculate'])->name('blackjack.calculate');
    Route::post('/redirect/to/buy', [PagesController::class, 'store'])->name('redirect.buy');
});
