<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class,'index'])->name('home');
Route::get('/contact',[BaseController::class,'contact'])->name('contact');

Route::prefix('package')->group(function(){
    Route::get('/',[BaseController::class,'package'])->name('package');
    Route::get('/family-room',[BaseController::class,'familyRoom'])->name('family-room');
    Route::get('/lombok-room',[BaseController::class,'lombokRoom'])->name('lombok-room');
    Route::get('/meeting',[BaseController::class,'meetingRoom'])->name('meeting');
    Route::get('/swiming-pool',[BaseController::class,'swimingPool'])->name('swiming-pool');
    Route::get('/gathering',[BaseController::class,'gathering'])->name('gathering');
    Route::get('/outdoor-weeding',[BaseController::class,'outdoorWedding'])->name('outdoor-wedding');
});

