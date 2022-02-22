<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getMainCategory()
    {
        $categories_old = DB::table('categories')->where('parent_id', '=', null)->get();
        $categories = [];
        foreach($categories_old as $category) {
            $sub_categories = DB::table('categories')->where('parent_id', '=', $category->id)->get();
            $category->sub_category = $sub_categories;
            array_push($categories, $category);
        }
//        dd($categories);
        return view('layouts.master', compact('categories'));
    }
}
