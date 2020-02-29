<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin');
});
Route::get('/table/{number?}', function ($number = 2) {
   for($i =1; $i <= 10 ; $i++){
       echo "$i * $number = ". $i* $number ."<br>";
   }   
})->where('number', '[0-9]+');