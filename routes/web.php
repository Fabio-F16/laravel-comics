<?php

use Illuminate\Support\Facades\Route;

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
 
    $comics = @include('../config/comics.php');
    return view('mainPage', ["comics"=>$comics]);
});
Route::get('cardDetails', function () {
 
    $comics = @include('../config/comics.php');
    return view('cardDetails', ["comics"=>$comics]);
});

