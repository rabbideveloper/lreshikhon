<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//})->name('home');
//
//Route::get('about', function () {
//    return view('about');
//})->name('about');
//
//
//Route::get('contact', function () {
//    return view('contact');
//})->name('contact');
//
//
//Route::get('about/{name}',function ($name){
//    return "About , ".strtoupper($name);
//});
//
//
//
//// Math Controller use
//
//Route::get('/sum/{number1}/{number2}',[MathController::class,'Sum'])->where(['number1'=>'[0-9]+','number2'=>'[0-9]+'])->name('math.sum');
//Route::get('/multy/{number1}/{number2}',[MathController::class,'Multy'])->name('math.sum')->where(['number1'=>'[0-9]+','number2'=>'[0-9]+']);


// Class 5 Route list here Babu Sir

//Route::group(['prefix'=>'math'],function(){
//    Route::get('/sum/{num1}/{num2}',[MathController::class,'sum'])->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
//
//    Route::get('/sub',[MathController::class,'sub']);
//
//    Route::get('/mult',[MathController::class,'mult']);
//
//    Route::get('/div',[MathController::class,'div']);
//});

//Route::get('/country',[CountryController::class,'index']);
//Route::get('/country/create',[CountryController::class,'create']);
//Route::post('/country/create',[CountryController::class,'store']);

//Route::get('country/{countryName}',[CountryController::class,'myCountry']);


// Resource route for country
//Route::resource('country',CountryController::class);

// Another practice

Route::group(['prefix' => 'math'],function () {
   Route::get('sum/{num1}/{num2}', [MathController::class,'sum']);
});

// class 6 routes

Route::get('home',[SiteController::class,'home']);
Route::get('about',[SiteController::class,'about']);
Route::get('contact',[SiteController::class,'contact']);
Route::get('extra',[SiteController::class,'extra']);











