<?php

use App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

// Route::get('storage/MutarrebMobily', function ($filename)
// {
//     $path = storage_path('storage/app/apk/MutarrebMobily.apk' . $filename);
 
//     if (!File::exists($path)) {
//         abort(404);
//     }
 
//     $file = File::get($path);
//     $type = File::mimeType($path);
 
//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);
 
//     return Storage::download('app/apk/MutarrebMobily.apk');
// });

// Route::post('process', function (Request $request) {
//     // cache the file
//     $file = $request->file('photo');
 
//     // generate a new filename. getClientOriginalExtension() for the file extension
//     $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();
 
//     // save to storage/app/photos as the new $filename
//     $path = $file->storeAs('photos', $filename);
 
//     dd($path);
// });