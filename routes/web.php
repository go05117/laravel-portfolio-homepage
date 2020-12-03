<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Http\Response;
use Psr\Http\Message\ServerRequestInterface;

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

Route::get('/ending', function() {
    return view('ending');
});

Route::get('/activity', function() {
    return view('activity');
});

// 프로젝트 페이지 베이스
Route::get('/project', function() {
    $temp = 0;

    $query = DB::table('project')->pluck('title');
    foreach ($query as $value) {
        $titles[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('project')->pluck('id');
    foreach ($query as $value) {
        $ids[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('project')->pluck('comment');
    foreach ($query as $value) {
        $comments[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('project')->pluck('article');
    foreach ($query as $value) {
        $articles[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('project')->pluck('git');
    foreach ($query as $value) {
        $gits[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('project')->pluck('photo');
    foreach ($query as $value) {
        $photos[$temp] = $value;
        $temp++;
    }

    return view('project')->with('id', $ids)
                                ->with('title', $titles)
                                ->with('comment', $comments)
                                ->with('article', $articles)
                                ->with('git', $gits)
                                ->with('photo', $photos);
});

// 프로젝트 입력 페이지
Route::get('/project_input', function() {
    return view('project_input');
});

// 프로젝트 입력 시 페이지
Route::get('/project2', function (ServerRequestInterface $request) {
    $title = $request->input('title');

    return $title;
});
