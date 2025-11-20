<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\EdukasiController;
use App\Http\Controllers\Api\GaleriFotoController; 
use App\Http\Controllers\Api\GaleriVideoController;
use App\Http\Controllers\Api\GaleriDokumenController;

// Route API untuk edukasi
Route::apiResource('edukasi', EdukasiController::class);

Route::apiResource('galeri-foto', GaleriFotoController::class);

Route::apiResource('galeri-video', GaleriVideoController::class);

Route::apiResource('galeri-dokumen', GaleriDokumenController::class);

