<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {

        $data = DB::table('products')
            ->get();

        return view('products/index', compact('data'));
    }

    // public function getTop10()
    // {
    //     $data = DB::table('products')
    //         ->limit(10)
    //         // ->ddRawSql();
    //         ->get();

    //     return view('products/get-top-10', compact('data'));
    // }

    public function create()
    {
        return view('products/create');
    }


    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|string',
                'price_regular' => 'required|numeric',
                'price_sale' => 'required|numeric',
                'views' => 'required|numeric',
                'quantity' => 'required|numeric',
                'description' => 'required|string'

            ]
        );

        $data =
            [
                'name' => $request->name,
                'price_regular' => $request->price_regular,
                'price_sale' => $request->price_sale,
                'views' => $request->views,
                'quantity' => $request->quantity,
                'description' => $request->description
            ];

        DB::table('products')
            ->insert($data);


        $data = DB::table('products')
            ->get();


        return redirect()->route('products.index', compact('data'))->with('success', 'Created successfully');
    }

    public function delete($id)
    {
        DB::table('products')->where('id', $id)
            ->delete();
        // ->ddRawSql();

        $data = DB::table('products')
            ->get();


        return redirect()->route('products.index')->with('delete', 'Product deleted successfully');
    }

    public function edit($id)
    {
        $data = DB::table('products')->where('id', $id)
            ->first();

        return view('products.update', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'price_regular' => 'required|numeric',
            'price_sale' => 'required|numeric',
            'views' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required|string'
        ]);

        $data =
            [
                'name' => $request->name,
                'price_regular' => $request->price_regular,
                'price_sale' => $request->price_sale,
                'views' => $request->views,
                'quantity' => $request->quantity,
                'description' => $request->description
            ];

        DB::table('products')->where('id', $id)
            ->update($data);


        // $data = DB::table('products')
        //     ->get();

        return redirect()->route('products.index')->with('update', 'Product update successfully');
    }

    public function show($id)
    {
        $data = DB::table('products')->where('id', $id)->first();

        return view('products.show', compact('data'));
    }

    public function client()
    {

        $data = DB::table('products')
            ->get();

        return view('products.clients.index', compact('data'));
    }

    public function details($id)
    {
        $data = DB::table('products')
            ->where('id', '=', $id)
            ->first();

        return view('products.clients.details', compact('data'));
    }
}
