<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function index()
    {
        $data = DB::table('customers')
            ->get();

        return view('customers/index', compact('data'));
    }

    public function getNameWithJoin()
    {
        $data = DB::table('customers')
            ->where('name', 'like', '%John%')
            ->get();
            // ->ddRawSql();

        return view('customers/get-name-with-join', compact('data'));
    }
}
