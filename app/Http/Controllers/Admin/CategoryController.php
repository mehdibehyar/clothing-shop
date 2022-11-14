<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:show_categories')->only(['index']);
        $this->middleware('can:create_category')->only(['create','store']);
        $this->middleware('can:edit_category')->only(['edit','update']);
        $this->middleware('can:delete_category')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::query();
        if ($search=\request('search')){
            $categories->where('parent_id',0)->orWhere('name_category','LIKE',"%{$search}%")->where('id',$search);
        }

        $categories=$categories->where('parent_id',0)->latest()->paginate(10);
        return view('admin.categories.all',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->parent_id){
            $request->validate(['parent_id'=>'exists:categories,id']);
        }
        $request->validate([
            'name_category'=>'required|max:255',
            'image'=>'nullable'
        ]);
        Category::create([
            'name_category'=>$request->name_category,
            'parent_id'=>$request->parent??0,
            'image'=>isset($request->image)?$request->image:null
        ]);
        return redirect(route('admin.categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
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
        $request->validate([
            'name_category'=>'required|max:255',
            'image'=>'nullable'
        ]);
        $category->update([
            'name_category'=>$request->name_category,
            'image'=>isset($request->image)?$request->image:null
        ]);
        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('admin.categories.index'));
    }
}
