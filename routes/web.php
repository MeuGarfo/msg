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

$db=new Medoo\Medoo(config("medoo"));

Route::get('/', function () use ($db){
    return var_dump($db->info());
    //return view('welcome');
});
