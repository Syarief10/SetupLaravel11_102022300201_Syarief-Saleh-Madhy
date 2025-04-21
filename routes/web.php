<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::get('/mobil', [MobilController::class,'tampilkanView'])->name('mobil');