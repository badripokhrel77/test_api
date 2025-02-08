<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test',function(){
    return ["name"=>"Badri Pokhrel","Company"=>"Atirab techno Pvt ltd"];
});

Route::get('student',[StudentController::class,'list']);
Route::post('add',[StudentController::class,'adduser']);
Route::put('update',[StudentController::class,'updateuser']);