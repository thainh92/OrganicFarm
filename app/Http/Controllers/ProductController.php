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

    }

    public function indexAdmin()
    {
        $products = DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.name as category_name', 'products.*')
            ->get();
        return view('admin.product.index', compact('products'));
    }

    /*-- Product --*/
    public function getProducts()
    {
        $products = DB::table('products')->inRandomOrder()->limit(15)->get();
        return view('main_public.product', compact('products'));
    }

    public function getTrending()
    {
        $trending = DB::table('products')->inRandomOrder()->limit(8)->get();
        $featured = DB::table('products')->inRandomOrder()->limit(8)->get();
        return view('main_public.index ', compact('trending','featured'));
    }

    public function getFruits()
    {
        $fruits = DB::table('products')->where('parent_category_id', '=', 1)->get();
        return view('main_public.fruits', compact('fruits'));
    }

    public function getVegetables()
    {
        $vegetable = DB::table('products')->where('parent_category_id', '=', 2)->get();
        return view('main_public.vegetable', compact('vegetable'));
    }

    public function getOrganicVegetables()
    {
        $organicvegetable = DB::table('products')->where('category_id', '=', 5)->get();
        return view('main_public.organicvegetable', compact('organicvegetable'));
    }

    public function getMushrooms()
    {
        $mushroom = DB::table('products')->where('category_id', '=', 6)->get();
        return view('main_public.mushroom', compact('mushroom'));
    }

    public function getMeats()
    {
        $meat = DB::table('products')->where('parent_category_id', '=', 3)->get();
        return view('main_public.meat', compact('meat'));
    }

    public function getPorks()
    {
        $pork = DB::table('products')->where('category_id', '=', 7)->get();
        return view('main_public.pork', compact('pork'));
    }
    public function getBeefs()
    {
        $beef = DB::table('products')->where('category_id', '=', 8)->get();
        return view('main_public.beef', compact('beef'));
    }
    public function getPoultrys()
    {
        $poultry = DB::table('products')->where('category_id', '=', 9)->get();
        return view('main_public.poultry', compact('poultry'));
    }

    public function getMilks()
    {
        $milk = DB::table('products')->where('parent_category_id', '=', 4)->get();
        return view('main_public.milk', compact('milk'));
    }
    /*-- End-Product --*/



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = array(
            0 => "Thit",
            1 => "Rau",
            2 => "Ca",
            3 => "Fruit"
        );
        return view('admin.product.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/img/category', $filename);
        }
        Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'discount_id'=>$request->discount_id,
            'price'=>$request->price,
            'status'=>$request->status,
            'thumbnail'=> $filename
        ]);
        return redirect()->route('admin-product-index');
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
