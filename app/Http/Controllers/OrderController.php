<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $data = DB::table('orders')
            ->join('status', 'status.id', '=', 'orders.status')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.id', 'orders.total', 'customers.name as customer_name', 'status.name as status_name')
            ->get();

        return view('orders/index', compact('data'));
    }

    public function getCompletedOrTotalOver100()
    {
        $data = DB::table('orders')
            ->join('status', 'status.id', '=', 'orders.status')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.id', 'orders.total', 'customers.name as customer_name', 'status.name as status_name')
            ->where('orders.status', '=', '3')
            ->orWhere('orders.total', '>', '100')
            ->get();

        return view('orders/get-completed-or-total-over-100', compact('data'));
    }


    public function getAll()
    {
        $data = DB::table('orders')
            ->join('status', 'status.id', '=', 'orders.status')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.id', 'orders.total', 'customers.name as customer_name', 'status.name as status_name')
            ->get();

        return view('orders/get-all', compact('data'));
    }


    public function updateProcessingToShipped()
    {
        DB::table('orders')
            ->where('orders.status', '=', '5')
            ->update(['orders.status' => '4']);
            

        $data = DB::table('orders')
            ->join('status', 'status.id', '=', 'orders.status')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.id', 'orders.total', 'customers.name as customer_name', 'status.name as status_name')
            ->get();

        return view('orders/get-all', compact('data'));
    }
}
