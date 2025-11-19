<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\EdukasiController;

// Route API untuk edukasi
Route::apiResource('edukasi', EdukasiController::class);
