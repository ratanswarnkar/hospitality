<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyodhyaController;

Route::get('/', [AyodhyaController::class, 'index']);
