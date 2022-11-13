<?php

use App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {
    return view('index');
});

Route::get('/contect_us', function () {
    return view('contect_us');
});

Route::get('upload','App\Http\Controllers\UploadController@indexx');
Route::post('/upload', 'App\Http\Controllers\UploadController@upload');




// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {   

//     Route::group(['middleware' => ['guest']], function() {

//         /**
//          * Login Routes
//          */
//         Route::get('/login', 'LoginController@show')->name('login.show');
//         Route::post('/login', 'LoginController@login')->name('login.perform');

//     });
// });

Route::get('/login', 'App\Http\Controllers\LoginController@show')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login');

Route::get('downloadCenter', 'App\Http\Controllers\DownloadController@downloadFile');