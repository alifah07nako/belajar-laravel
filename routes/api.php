<?php

namespace App\Http\Controllers\Api; // Tambahkan ini jika di awal file belum ada

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController; // <--- BARIS INI WAJIB ADA

Route::apiResource('/posts', PostController::class);