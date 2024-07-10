<?php

namespace App\Http\Controllers\NewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news/index');
    }

    public function XemNhieu()
    {
        $data = DB::table('news')
            ->join('categories', 'news.category', '=', 'categories.id')
            ->select('news.id', 'news.title', 'news.date', 'news.view', 'categories.name as category_name')
            ->orderBy('news.view', 'desc')
            ->limit(10)
            ->get();
        return view('news/xem-nhieu', compact('data'));
    }


    public function MoiNhat()
    {
        $data = DB::table('news')
            ->join('categories', 'news.category', '=', 'categories.id')
            ->select('news.id', 'news.title', 'news.date', 'news.view', 'categories.name as category_name')
            ->orderBy('news.date', 'desc')
            ->limit(10)
            ->get();
        return view('news/tin-moi', compact('data'));
    }
    public function TheoLoai(string $id)
    {
        $data = DB::table('news')
            ->join('categories', 'news.category', '=', 'categories.id')
            ->select('news.id', 'news.title', 'news.date', 'news.view', 'categories.name as category_name')
            ->where('news.category', '=', $id)
            ->orderBy('news.date', 'desc')
            ->get();
        return view('news/theo-loai', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('news')
            ->join('categories', 'news.category', '=', 'categories.id')
            ->where('news.id', $id)
            ->select('news.id', 'news.title', 'news.date', 'news.view', 'categories.name as category_name', 'news.description')
            ->first();

        return view('news/show', compact('id', 'data'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
