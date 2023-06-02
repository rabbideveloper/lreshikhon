<?php

use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');


Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('about/{name}',function ($name){
    return "About , ".strtoupper($name);
});



// Math Controller use

Route::get('/sum/{number1}/{number2}',[MathController::class,'Sum'])->where(['number1'=>'[0-9]+','number2'=>'[0-9]+'])->name('math.sum');
Route::get('/multy/{number1}/{number2}',[MathController::class,'Multy'])->name('math.sum')->where(['number1'=>'[0-9]+','number2'=>'[0-9]+']);























