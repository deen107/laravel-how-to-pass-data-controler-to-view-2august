<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'index']);

// route prefix
Route::prefix('UP')->group(function () {
    Route::get('/agra', function () {
        // Matches The "/admin/users" URL
        return "This is Agra page";
    });
    Route::get('/lucknow', function () {
        // Matches The "/admin/users" URL
        return "This is Lucknow page";
    });
    Route::get('/allhabad', function () {
        // Matches The "/admin/users" URL
        return "This is Allahabad page";
    });
    
});
Route::get('/city/agra', [CityController::class, 'agra']);