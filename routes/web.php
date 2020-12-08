<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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

function password() {
    $query = DB::table('password')->pluck('password');
    foreach ($query as $value) {
        $temp = $value;
    }
    return $temp;
}

Route::get('/', function() {
    return view('index');
});

Route::get('/intro', function() {
    return view('intro');
});

Route::get('/ending', function() {
    return view('ending');
});

// activity 페이지 베이스
Route::get('/activity', function() {
    $temp = 0;

    $query = DB::table('activity')->pluck('title');
    foreach ($query as $value) {
        $titles[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('activity')->pluck('id');
    foreach ($query as $value) {
        $ids[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('activity')->pluck('comment');
    foreach ($query as $value) {
        $comments[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('activity')->pluck('article');
    foreach ($query as $value) {
        $articles[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('activity')->pluck('git');
    foreach ($query as $value) {
        $gits[$temp] = $value;
        $temp++;
    }

    $temp = 0;
    $query = DB::table('activity')->pluck('photo');
    foreach ($query as $value) {
        $photos[$temp] = $value;
        $temp++;
    }

    return view('activity')->with('id', $ids)
        ->with('title', $titles)
        ->with('comment', $comments)
        ->with('article', $articles)
        ->with('git', $gits)
        ->with('photo', $photos);
});

Route::post('/activity_create', function(Request $request) {
    if ($request->password == password()) {
        DB::table('activity')->insert(
            ['title' => $request->title,
                'photo' => $request->photo,
                'comment' => $request->comment,
                'git' => $request->git,
                'article' => $request->article]
        );
        echo "<script>alert('정상적으로 입력되었습니다.')</script>";
    }
    else {
        echo "<script>alert('잘못된 비밀번호 입니다.')</script>";
    }
    return "<script>window.close()</script>";
});

Route::post('/project_create', function(Request $request) {
    if ($request->password == password()) {
        DB::table('project')->insert(
            ['title' => $request->title,
                'photo' => $request->photo,
                'comment' => $request->comment,
                'git' => $request->git,
                'article' => $request->article]
        );
        echo "<script>alert('정상적으로 입력되었습니다.')</script>";
    }
    else {
        echo "<script>alert('잘못된 비밀번호 입니다.')</script>";
    }
    return "<script>window.close()</script>";
});

Route::post('/project_delete', function(Request $request) {
    if ($request->password == password()) {
        DB::table('project')->where('id', '=', $request->id)->delete();
        echo "<script>alert('정상적으로 삭제되었습니다.')</script>";
    }
    else {
        echo "<script>alert('잘못된 비밀번호 입니다.')</script>";
    }
    return "<script>window.close()</script>";
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

// 프로젝트 수정 페이지
Route::get('/project_modify_page', function() {
    return view('project_modify_page');
});

// 프로젝트 삭제 페이지
Route::get('/project_delete_page', function(Request $request) {
    $id = $request->id;
    return view('project_delete_page')->with('id', $id);
});

// activity 입력 페이지
Route::get('/activity_input', function() {
    return view('activity_input');
});

// activity 수정 페이지
Route::get('/activity_modify_page', function() {
    return view('activity_modify_page');
});

// activity 삭제 페이지
Route::get('/activity_delete_page', function() {
    return view('activity_delete_page');
});
