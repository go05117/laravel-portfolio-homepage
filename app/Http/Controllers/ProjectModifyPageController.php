<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectModifyPageController extends Controller
{
    public function index(Request $request)
    {
        $values = [];
        $temp = 0;
        $query = DB::table('project')->where('id', '=', $request->id)->pluck('title');
        foreach ($query as $value) {
            $values[0] = $value;
            $temp++;
        }

        $query = DB::table('project')->where('id', '=', $request->id)->pluck('comment');
        foreach ($query as $value) {
            $values[1] = $value;
            $temp++;
        }

        $query = DB::table('project')->where('id', '=', $request->id)->pluck('article');
        foreach ($query as $value) {
            $values[2] = $value;
            $temp++;
        }

        $query = DB::table('project')->where('id', '=', $request->id)->pluck('git');
        foreach ($query as $value) {
            $values[3] = $value;
            $temp++;
        }

        $query = DB::table('project')->where('id', '=', $request->id)->pluck('photo');
        foreach ($query as $value) {
            $values[4] = $value;
            $temp++;
        }

        return view('project_modify_page')->with('id', $request->id)
            ->with('title', $values[0])
            ->with('comment', $values[1])
            ->with('article', $values[2])
            ->with('git', $values[3])
            ->with('photo', $values[4]);
    }
}
