<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.manage-category')->with('categories',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $MainCategories = Category::where('parent_id' , null)->get();
        return view('admin.insert-category')->with('mainCategories', $MainCategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat_title' => 'required|max:225',
            'cat_description' => 'required|max:225',
        ]);

        $cat = new Category();
        $cat->cat_title = $request->cat_title;
        $cat->cat_slug = Str::slug($request->cat_title);
        $cat->cat_description = $request->cat_description;
        $cat->parent_id = $request->parent_id;
        $cat->save();

        return redirect()->route('category.index')->with('success','category has been inserted successfully');      
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
