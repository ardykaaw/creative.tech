<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('home');
});

Route::get('/portfolio/{type}', [PortfolioController::class, 'show']);
