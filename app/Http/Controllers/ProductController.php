<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vegetable = DB::table('products')->where('category_id', '=', 2)->get();
        return view('main_public.vegetable', compact('vegetable'));
    }

    public function getFruits()
    {
        $fruits = DB::table('products')->where('category_id', '=', 1)->get();
        return view('main_public.fruits', compact('fruits'));
    }

    public function getVegetables()
    {
        $vegetable = DB::table('products')->where('category_id', '=', 2)->get();
        return view('main_public.vegetable', compact('vegetable'));
    }

    public function getMeats()
    {
        $meat = DB::table('products')->where('category_id', '=', 3)->get();
        return view('main_public.meat', compact('meat'));
    }

    public function getMilks()
    {
        $milk = DB::table('products')->where('category_id', '=', 4)->get();
        return view('main_public.milkproduct', compact('milk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('main_public.product-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->all();
        Product::create($product);
        return redirect('main_public.product');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function getProductById($id)
    {
        $product = Product::find($id);
        return view('main_public.product_detail', compact('product'));
    }
}
