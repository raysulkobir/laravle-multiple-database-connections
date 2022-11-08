<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


// class McibModel extends Model
// {

//     protected $connection = 'second_db_connection';

//     protected $table = 'agencies';
// }
Route::get('/demo', function () {
    $products = DB::table("brands")->get();
    // return $products;

    $products = DB::connection('mysql_second')->table("categories")->get();
    return $products;
});
