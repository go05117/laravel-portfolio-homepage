<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function index()
    {
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
    }
}
