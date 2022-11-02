<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:show_images')->only(['index']);
        $this->middleware('can:create_image')->only(['create','store']);
        $this->middleware('can:edit_image')->only(['edit','update']);
        $this->middleware('can:delete_image')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $images=$product->images()->latest()->paginate(30);
        return view('admin.products.images.all',compact('product','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('admin.products.images.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product,Request $request)
    {
        $data=$request->validate([
            'images'=>'required|array'
        ]);
        $images=collect($data['images']);
        $images->each(function ($image) use($product){
            $product->images()->create($image);
        });

        return redirect(route('admin.product.image.index',['product'=>$product->id]));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,Image $image)
    {
        return view('admin.products.images.edit',compact('product','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product,Request $request, Image $image)
    {
        $data=$request->validate([
            'image'=>'required'
        ]);
        $image->update([
            'image'=>$data['image']
        ]);

        return redirect(route('admin.product.image.index',['product'=>$product->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,Image $image)
    {
        $image->delete();
        return redirect(route('admin.product.image.index',['product'=>$product->id]));

    }
}
