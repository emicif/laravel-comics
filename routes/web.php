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

    $data = config('comics');
    $navigation = config('navigation');
    return view('home', ["comics" => $data, "navigation" => $navigation]);

});




Route::get('/card/{id}', function ($id) {


    $data = config('comics');
    $navigation = config('navigation');
    return view('partials/card', ["comic" => $data[$id], "navigation" => $navigation ]);

    //return view('partials/card', [ "card"=> $data ]);


  });

