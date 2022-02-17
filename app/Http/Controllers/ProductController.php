<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $get_parent_category = DB::table('categories')->where('parent_id', '=', 0)->get();
        return view('admin.product.create', compact('get_parent_category'));
//        $data = DB::table('products')
//            ->join('categories', 'products.category_id', '=', 'categories.id')
//            ->join('discounts', 'products.discount_id', '=', 'discounts.id')
//            ->select('products.*', 'categories.name as category_name', 'discounts.name as discount_name')
//            ->get();
//        return view('admin.product.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img/product', $filename);
        }
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->parent_category;
        if ($request->sub_category) {
            $product->category_id = $request->sub_category;
        }
        $product->discount_id = $request->discount_id;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->thumbnail = $filename;
        $product->save();

//        Product::create([
//            'name' => $request->name,
//            'description' => $request->description,
//            'category_id' => $request->category_id,
//            'discount_id' => $request->discount_id,
//            'price' => $request->price,
//            'status' => $request->status,
//            'thumbnail' => $filename
//        ]);
        return redirect()->route('admin-product-index')->with('message', 'Create new product success');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('category')->where('id', '=', $id)->first();
//        dd($product->category);
        $current_parent_category = Category::query()->where('id', '=', $product->category->parent_id)->first();
        // $product->category
//        dd($product);
//        $get_product_category_id = DB::table('products')->where('category_id', '=', $id);
        $get_parent_category = DB::table('categories')->where('parent_id', '=', 0)->get();

        return view('admin.product.edit', compact('product', 'get_parent_category', 'current_parent_category'));
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

    public function trash($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('admin-product-index', '', 201);
    }

    public function indexAdmin()
    {
        $products = DB::table('products')
            ->join('categories', function ($join) {
                $join->on('products.category_id', '=', 'categories.id')->where('products.deleted_at','=',null);
            })->select('categories.name as category_name', 'products.*')
            ->get();
//        $products = DB::table('products')
//            ->join('categories', 'products.category_id', '=', 'categories.id')
//            ->select('categories.name as category_name', 'products.*')
//            ->get();
        return view('admin.product.index', compact('products'));
    }

    public function getProductById($id)
    {
        $product = Product::find($id);
        return view('main_public.product_detail', compact('product'));
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
        return view('main_public.milk', compact('milk'));
    }

    public function getTrending()
    {
        $trending = DB::table('products')->inRandomOrder()->limit(8)->get();
        $featured = DB::table('products')->inRandomOrder()->limit(8)->get();
        return view('main_public.index ', compact('trending', 'featured'));
    }

    public function getSubCategoryProduct(Request $request)
    {
        $get_sub_category = DB::table('categories')
            ->where('parent_id', '=', $request->id)
            ->get();
        return $get_sub_category;
    }
}
