<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;


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
    return view('home').view('nav').view('about');
});
Route::get('/edu', function () {
    return view('home').view('nav').view('edu');
});
Route::get('/admin/add_proj', function () {
    return view('home').view('nav').view('admin/add_project');
});

Route::get('/exp',[usercontroller::class,'exp']);
Route::get('/cft',[usercontroller::class,'certificate']);

/* this is admin panel coding */
Route::post('admin/addproj',[usercontroller::class,'storeproject']);

/* project setting */
Route::get('php_proj',[usercontroller::class,'showprojectsphp']);
Route::get('php_lar',[usercontroller::class,'showphplar']);
Route::get('python',[usercontroller::class,'showpython']);
//  return view('home').view('nav').view('php');