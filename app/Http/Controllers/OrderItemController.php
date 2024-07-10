<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderItemController extends Controller
{

    public function index()
    {
        $data = DB::table('order_items')
            ->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->join('products', 'products.id', '=', 'order_items.product_id')
            ->select('order_items.id', 'products.name as product_name', 'orders.total as order_total')
            ->get();

        return view('order-items/index', compact('data'));
    }

    public function getTotalQuantitiesByProduct()
    {
        $data = DB::table('order_items')
            ->select('product_id', DB::raw('COUNT(product_id) as total_quantity'))
            ->groupBy('product_id')
            // ->ddRawSql();
            ->get();

        return view('order-items/get-total-quantities-by-product', compact('data'));

    }
}
