<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
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
    }
}
