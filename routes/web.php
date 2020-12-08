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

// 비밀번호 값
function password() {
    $query = DB::table('password')->pluck('password');
    foreach ($query as $value) {
        $temp = $value;
    }
    return $temp;
}

/**
 * index 페이지
 */
Route::get('/', function() {
    return view('index');
});

/**
 * intro 페이지
 */
Route::get('/intro', function() {
    return view('intro');
});

/**
 * ending 페이지
 */
Route::get('/ending', function() {
    return view('ending');
});

/**
 * activity 페이지
 */
// activity 페이지 베이스
Route::get('/activity', 'ActivityController@index');

// activity 입력 페이지
Route::get('/activity_input', function() {
    return view('activity_input');
});

// activity 수정 페이지
Route::get('/activity_modify_page', 'ActivityModifyPageController@index');

// activity 삭제 페이지
Route::get('/activity_delete_page', function(Request $request) {
    return view('activity_delete_page')->with('id', $request->id);
});

// activity 글 생성
Route::post('/activity_create', 'ActivityCreateController@index');

// activity 글 수정
Route::post('/activity_modify', 'ActivityModifyController@index');

// activity 글 삭제
Route::post('/activity_delete', 'ActivityDeleteController@index');


/**
 * 프로젝트 페이지
 */
// 프로젝트 페이지 베이스
Route::get('/project', 'ProjectController@index');

// 프로젝트 입력 페이지
Route::get('/project_input', function() {
    return view('project_input');
});

// 프로젝트 수정 페이지
Route::get('/project_modify_page', 'ProjectModifyPageController@index');

// 프로젝트 삭제 페이지
Route::get('/project_delete_page', function(Request $request) {
    return view('project_delete_page')->with('id', $request->id);
});

// 프로젝트 페이지 글 생성
Route::post('/project_create', 'ProjectCreateController@index');

// 프로젝트 페이지 글 수정
Route::post('/project_modify', 'ProjectModifyController@index');

// 프로젝트 페이지 글 삭제
Route::post('/project_delete', 'ProjectDeleteController@index');
