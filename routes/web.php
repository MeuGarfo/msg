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
App::instance('db',$db);

Route::get('/', function () {
    $db=App::make('db'); 
    return var_dump($db->info());
    //return view('welcome');
});
