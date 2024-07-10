<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotifyController extends Controller
{
    public function index()
    {

        $data = DB::table('news')
            ->get();

        $categories = DB::table('categories')
            ->get();

        return view('notifies.index', compact('data', 'categories'));
    }

    public function show($id)
    {

        $data = DB::table('news')
            ->where('id', '=', $id)
            ->first();

        $categories = DB::table('categories')
            ->get();

        return view('notifies.show', compact('data', 'categories'));
    }

    public function newByCategory($categoryID)
    {

        $data = DB::table('news')
            ->join('categories', 'categories.id', '=', 'news.category')
            ->where('news.category', $categoryID)
            ->select('news.id', 'news.title', 'news.date', 'news.view', 'categories.name as category_name')
            ->get();

        $category = DB::table('categories')
            ->where('id', $categoryID)
            ->first();

        $categories = DB::table('categories')
            ->get();

        return view('notifies.new-by-category', compact('data', 'category', 'categories'));
    }
}
