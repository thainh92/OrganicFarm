<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

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

    /*-- Product --*/
    public function getProducts(Request $request, $category_name)
    {
        $category = Category::with('product')->where('url', '=', $category_name)->first();
        if ($category->parent_id == null) {
            $get_list_category_id = DB::table('categories')
                ->where('parent_id', '=', $category->id)
                ->get();
            $category_ids = array_column($get_list_category_id->toArray(), 'id');
            array_push($category_ids, $category->id);
            $products = DB::table('products')->whereIn('category_id', $category_ids);
            if (isset($request->input_name)) {
                $products = $products->where('name', 'like', '%' . $request->input_name . '%');
            }
            if (isset($request->start_price)) {
                $products = $products->where('price', '>=', $request->start_price);
            }
            if (isset($request->end_price)) {
                $products = $products->where('price', '<=', $request->end_price);
            }
            if (isset($request->sub_category_id)) {
                $sub_category_ids = $request->sub_category_id;
                $products = $products->whereIn('category_id', $sub_category_ids);
            }
            if (isset($request->sort_by)) {
                if ($request->sort_by == 'default') {
                    $products = $products->reorder();
                }
                if ($request->sort_by == 'lastest') {
                    $products = $products->orderBy('created_date', 'desc');
                }
                if ($request->sort_by == 'low_to_high') {
                    $products = $products->orderBy('price', 'asc');
                }
                if ($request->sort_by == 'high_to_low') {
                    $products = $products->orderBy('price', 'desc');
                }
            }
            $products = $products->paginate(5)->withQueryString();;
//            return view('main_public.product', compact('category', 'products'));
            return view('main_public.product', ['products' => $products,
                'total' => $products->total(),
                'perPage' => $products->perPage(),
                'currentPage' => $products->currentPage(),
                'category' => $category,
            ]);
        }
        if ($category != null) {
            $products = DB::table('products')->where('category_id', '=', $category->id)->paginate(5)->withQueryString();
//            return view('main_public.product', compact('category', 'products'));

            return view('main_public.product', ['products' => $products,
                'total' => $products->total(),
                'perPage' => $products->perPage(),
                'currentPage' => $products->currentPage(),
                'category' => $category,
            ]);
        }
    }

    public function getTrending()
    {
        $trending = DB::table('products')->inRandomOrder()->limit(8)->get();
        $featured = DB::table('products')->inRandomOrder()->limit(8)->get();
        return view('main_public.index ', compact('trending', 'featured'));
    }

    /*-- End-Product --*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $get_parent_category = DB::table('categories')->where('parent_id', '=', null)->get();
        return view('admin.product.create', compact('get_parent_category'));
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
        return redirect()->route('admin-product-index')->with('message', 'Create new product success');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id', '=', $id)->first();
        return view('main_public.product_detail', compact('product'));
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
        $current_parent_category = Category::query()->where('id', '=', $product->category->parent_id)->first();
        $get_parent_category = DB::table('categories')->where('parent_id', '=', null)->get();
        return view('admin.product.edit', compact('product', 'get_parent_category', 'current_parent_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img/product', $filename);
        }
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->parent_category;
        if ($request->sub_category) {
            $product->category_id = $request->sub_category;
        }
        $product->discount_id = $request->discount_id;
        $product->status = $request->status;
        $product->thumbnail = $filename;
        $product->save();
        return redirect()->route('admin-product-index')->with('message', 'Update product success');
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
                $join->on('products.category_id', '=', 'categories.id')->where('products.deleted_at', '=', null);
            })->select('categories.name as category_name', 'products.*')
            ->orderBy('created_at', 'desc')
            ->paginate(10)->withQueryString();
        $get_categories = DB::table('categories')
            ->where('deleted_at', '=', null)
            ->select('name', 'id')
            ->get();
        return view('admin.product.index', ['products' => $products,
            'total' => $products->total(),
            'perPage' => $products->perPage(),
            'currentPage' => $products->currentPage(),
            'get_categories' => $get_categories,
        ]);
    }

    public function getSubCategoryProduct(Request $request)
    {
        $get_sub_category = DB::table('categories')
            ->where('parent_id', '=', $request->id)
            ->get();
        return $get_sub_category;
    }

}
