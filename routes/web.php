<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Http\Response;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function() {
    return view('index');
});

Route::get('/intro', function() {
    return view('intro');
});

Route::get('/activity', function() {
    return view('activity');
});

Route::get('/project', function() {
    return view('project');
});

Route::get('/ending', function() {
    return view('ending');
});

Route::get('/project_input', function() {
    return view('project_input');
});
