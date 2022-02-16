<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
        //admin
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function getCategoriesName()
    {
        $categories_name = DB::table('users')
            ->select('name', 'id')
            ->get();
        return view('admin.product.create', compact('categories_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->name . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('assets/img/category'), $newImageName);
        $category = Category::create([
            'name'=>$request->name,
            'code'=>$request->code,
            'thumbnail'=> $newImageName,
        ]);
        return redirect()->route('admin-category-index');
    }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\Category $category
         * @return \Illuminate\Http\Response
         */
        public
        function show(Category $category)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\Category $category
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
         */
        public
        function edit($id)
        {
            $category = Category::find($id);
            return view('admin.category.edit', compact('category'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\Category $category
         * @return \Illuminate\Http\RedirectResponse
         */
        public function update(Request $request, $id)
        {
            $category = Category::find($id);
            $category->name = $request->input('name');
            $category->code = $request->input('code');
            if($request->hasFile('thumbnail'))
            {
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('assets/img/category', $filename);
                $category->thumbnail = $filename;
            }
            $category->save();
            return redirect()->route('admin-category-index','', 201);
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\Category $category
         * @return \Illuminate\Http\RedirectResponse
         */
        public function destroy($id)
        {

        }

        public function trash($id)
        {
            Category::where('id', $id)->delete();
            return redirect()->route('admin-category-index','', 201);
        }
    }
