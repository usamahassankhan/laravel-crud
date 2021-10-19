<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Simplecrud;
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

// Route::get('/', function () {
//     return view('simplecrud.index');
// });
Route::get('/',[Simplecrud::class,'index']);
Route::get('/store',[Simplecrud::class,'store']);
  Route::post('/update',[Simplecrud::class,'update']);
  Route::get('/edit/{id}',[Simplecrud::class,'edit']);
 Route::get('delete/{id}',[Simplecrud::class,'destroy']);
 Route::get('/adddata',function(){
     return view('simplecrud.create');
 });
 Route::get('/noaccess',function(){
  return view('noaccess');
});
Route::get('/home',function(){
  return view('home');
});