<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserReg;


Route::get("/",[UserReg::class,'index']);
Route::get("/register",[UserReg::class,'register']);
Route::post("/register",[UserReg::class,'store']);
Route::get("/update/{id}",[UserReg::class,'update']);
Route::post("/update/{id}",[UserReg::class,'saveUpdate'])->name('users.update');
Route::get("/delete/{id}",[UserReg::class,'delete']);


