<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// admin routes
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,"adminDashboard"])->name('admin.dashboard'); 

    Route::resources([
        'category' => CategoryController::class,
    ]);
});

