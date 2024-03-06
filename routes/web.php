<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HaiController;
 
Route::get('postech/(kota)/cek', [HaiController::class, 'Index']);

Route::get('/deri', function () {
    return view('welcome');
});
