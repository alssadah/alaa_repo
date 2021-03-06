<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AnnotationController;
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
    return view('welcome');
});

//this is the way of defining the func
Route::get('/annotate', [AnnotationController::class, 'displayForm']);
Route::post('/annotate', [AnnotationController::class, 'annotateImage']);

Route::post('/annotate', [AnnotationController::class, 'store']);
// Route::get('/annotate', 'AnnotationController@displayForm');
// Route::post('/annotate', 'AnnotationController@annotateImage');