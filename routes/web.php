<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 



// 2. Định tuyến cho trang chủ gọi đến hàm index của HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

