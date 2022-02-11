<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function showAllSaleProduct()
    {
        $data = Product::all();
        return view('main_public.index', compact('data'));
        //dang viet den day
    }
}
