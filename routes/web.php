<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowersController;

Route::get('/', [FlowerController::class,'create'])->name('flower.creat');
Route::post('/flowers/store',[FlowerController::class,'store'])->name('flowers.store')


