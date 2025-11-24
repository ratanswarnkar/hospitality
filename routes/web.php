<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyodhyaController;

Route::get('/', [AyodhyaController::class, 'index']);
Route::get('/themes', [AyodhyaController::class, 'theme']);
Route::get('/adventure', [AyodhyaController::class, 'adventur']);
Route::get('/ayurveda', [AyodhyaController::class, 'ayurved']);
Route::get('/beachs', [AyodhyaController::class, 'beach']);
Route::get('/kerala', [AyodhyaController::class, 'keral']);
Route::get('/buddhista', [AyodhyaController::class, 'buddhist']);
Route::get('/cultures', [AyodhyaController::class, 'culture']);
Route::get('/family', [AyodhyaController::class, 'famil']);
Route::get('/golden', [AyodhyaController::class, 'golde']);
Route::get('/hill', [AyodhyaController::class, 'hil']);
Route::get('/himachal', [AyodhyaController::class, 'himacha']);
Route::get('/honeymoon', [AyodhyaController::class, 'honeymoo']);
Route::get('/luxury', [AyodhyaController::class, 'luxur']);
Route::get('/north', [AyodhyaController::class, 'nort']);
Route::get('/pighal', [AyodhyaController::class, 'pigha']);
Route::get('/wildlife', [AyodhyaController::class, 'wildlif']);
