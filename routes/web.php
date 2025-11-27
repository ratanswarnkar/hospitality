<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyodhyaController;

Route::get('/', [AyodhyaController::class, 'index']);

//themes routes
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


//special tours routes
Route::get('/special-tours', [AyodhyaController::class, 'special']);
Route::get('/bicycle-tours', [AyodhyaController::class, 'bicycle']);
Route::get('/wine-tours', [AyodhyaController::class, 'wine']);
Route::get('/haunted-tours', [AyodhyaController::class, 'haunted']);
Route::get('/slum-tours', [AyodhyaController::class, 'slum']);
Route::get('/bollywood-tours', [AyodhyaController::class, 'bollywood']);

Route::get('/fair-festival', [AyodhyaController::class, 'fair']);
Route::get('/hot-deals', [AyodhyaController::class, 'hot']);
Route::get('/enquiry', [AyodhyaController::class, 'enquir']);

Route::get('/about',[AyodhyaController::class, 'abou']);
Route::get('/directors',[AyodhyaController::class, 'director']);

Route::get('/sher',[AyodhyaController::class, 'she']);
Route::get('/gujrat-tour',[AyodhyaController::class, 'gujrat']);
Route::get('/golden-triangle-varanasi',[AyodhyaController::class, 'goldenVaranasi']);

Route::get('/blogs',[AyodhyaController::class, 'blo']);


