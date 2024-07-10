<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function index()
    {
        $data = DB::table('employees')
            ->get();

        return view('employees/index', compact('data'));
    }

    public function getDepartmentIn123()
    {
        $data = DB::table('employees')
            ->whereIn('department_id', ['1', '2', '3'])
            ->get();
            // ->ddRawSql();

        return view('employees/get-department-in-123', compact('data'));
    }
}
