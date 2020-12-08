<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectCreateController extends Controller
{
    public function index(Request $request)
    {
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
    }
}
