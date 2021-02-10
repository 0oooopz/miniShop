<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	/**
	 * @return Application|Factory|View
	 */
    public function index()
    {
    	$categories = Category::orderBy('created_at','desc')->get();
        return view('admin.category.index',[
        	'categories' => $categories,
        ]);
    }

	/**
	 * @return Application|Factory|View
	 */
    public function create()
    {
    	  return view('admin.category.create');
    }

	/**
	 * @param Request $request
	 * @return mixed
	 */
    public function store(Request $request)
    {
        $new_category = new Category();
        $new_category->title = $request->title;
        $new_category->description = $request->description;
        $new_category->save();
        return redirect()->back()->withSuccess('Category was added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

	/**
	 * @param Category $category
	 * @return Application|Factory|View
	 */
    public function edit(Category $category)
    {
        return view('admin.category.edit',[
        	'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $new_category = new Category;
        $new_category->title = $request->title;
        $new_category->description = $request->description;
        $new_category->save();
        return redirect()->back()->withSuccess('Category was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
