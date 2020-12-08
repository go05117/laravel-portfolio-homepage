<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityDeleteController extends Controller
{
    public function index(Request $request)
    {
        if ($request->password == password()) {
            DB::table('activity')->where('id', '=', $request->id)->delete();
            echo "<script>alert('정상적으로 삭제되었습니다.')</script>";
        }
        else {
            echo "<script>alert('잘못된 비밀번호 입니다.')</script>";
        }
        return "<script>window.close()</script>";
    }
}
