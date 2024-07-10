<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{

    public function index()
    {
        $data = DB::table('logs')
            ->get();

        return view('logs/index', compact('data'));
    }


    public function deleteLogs()
    {
        DB::table('logs')
            ->where('created_at', '<', '2020-01-01')
            ->delete();

        $data = DB::table('logs')
            ->get();

        return view('logs/index', compact('data'));
    }
}
