<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{

    public function index()
    {
        $data = DB::table('sales')
            ->get();

        return view('sales/index', compact('data'));
    }

    public function getInRange10005000()
    {
        $data = DB::table('sales')
            ->whereBetween('amount',['1000', '5000'])
            ->get();

        return view('sales/get-in-ange-1000-5000', compact('data'));
    }
}
