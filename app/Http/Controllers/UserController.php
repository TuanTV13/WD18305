<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('users')
            ->join('status', 'users.status', '=', 'status.id')
            ->select('users.id', 'users.name', 'users.age', 'users.birthday', 'status.name as status_name')
            // ->ddRawSql();
            ->get();

        return view('users/index', compact('data'));
    }

    public function getOver25()
    {

        $data = DB::table('users')
            ->join('status', 'users.status', '=', 'status.id')
            ->select('users.id', 'users.name', 'users.age', 'users.birthday', 'status.name as status_name')
            ->where('age', '>', '25')
            // ->ddRawSql();
            ->get();

        return view('users/get-over-25', compact('data'));
    }

    public function getActiveOver25()
    {

        $data = DB::table('users')
            ->join('status', 'users.status', '=', 'status.id')
            ->select('users.id', 'users.name', 'users.age', 'users.birthday', 'status.name as status_name')
            ->where('age', '>', '25')
            ->where('users.status', 1)
            ->get();
            // ->ddRawSql();

        return view('users/get-active-over-25', compact('data'));
    }

    public function getAgeDown()
    {

        $data = DB::table('users')
            ->join('status', 'users.status', '=', 'status.id')
            ->select('users.id', 'users.name', 'users.age', 'users.birthday', 'status.name as status_name')
            // ->orderBy('users.age', 'desc')
            ->orderByDesc('users.age')
            ->get();
            // ->ddRawSql();
        
        return view('users/get-age-down', compact('data'));

    }

    public function getWithBirthday()
    {

        $data = DB::table('users')
            ->join('status', 'users.status', '=', 'status.id')
            ->select('users.id', 'users.name', 'users.age', 'users.birthday', 'status.name as status_name')
            ->whereMonth('users.birthday', 5)
            ->get();

        return view('users/get-with-birthday', compact('data'));
    }

    public function create()
    {
        $data = [
            [
                'name' => 'TuanTV',
                'age' => 19,
                'status' => 1,
                'birthday' => '2004-03-01'
            ],
            [
                'name' => 'TuanTV1234',
                'age' => 30,
                'status' => 1,
                'birthday' => '1998-03-01'
            ],
            [
                'name' => 'TuanTV001',
                'age' => 19,
                'status' => 2,
                'birthday' => '2022-03-01'
            ]
        ];

        DB::table('users')->insert($data);
    }
}
