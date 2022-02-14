<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function showAllSaleProduct()
    {
        $top_data = DB::table('products')->skip(0)->take(8)->get();
        $bot_data = DB::table('products')->skip(2)->take(8)->get();
        return view('main_public.index', compact('top_data', 'bot_data'));
    }
}
