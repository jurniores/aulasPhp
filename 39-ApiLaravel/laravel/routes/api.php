<?php
use App\Http\Controllers\api\DogController;
use App\Http\Controllers\api\LoginController;
use Illuminate\Support\Facades\Route;
//Meus controllers





Route::apiResource('dogs',DogController::class);
Route::post('login', [LoginController::class,'create']);
Route::get('login/{id}', [LoginController::class,'show']);
Route::get('login', [LoginController::class,'index']);
