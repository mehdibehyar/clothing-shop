<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Dotenv\Validator;
use http\Env\Response;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    public function show(Request $request)
    {

        if ($request->ajax()){
            if ($request->has('price')){
                $products=Product::where('price','>=',$request->price*1000)->paginate(12);
            }
            if ($request->has('color')){
                $products=Color::find($request->color)->products()->paginate(12);
            }
            if ($request->has('search')){
                $products=Product::orWhere('title','LIKE',"%{$request->search}%")->paginate(12);
                $category= !empty(Category::where('name_category', 'LIKE', "%{$request->search}%")->first()) ?Category::where('name_category','LIKE',"%{$request->search}%")->first()->products:[];
                $products=$products->merge($category);

            }
            return view('products.page',compact('products'))->render();
        }

        $products=Product::query()->paginate(12);
        return view('products.products',compact('products'));
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $products=Product::query()->paginate(12);
            return view('products.page',compact('products'))->render();
        }

    }


    public function show_single_product(Product $product)
    {
        return view('products.single_product',compact('product'));
    }


    public function product_category(Category $category)
    {
        $products=$category->products()->paginate(12);
        return view('products.category.category_products',compact('products'));
    }



    public function search(Request $request)
    {
        if ($request->ajax()){
            if ($request->has('search')){
                $products=Product::orWhere('title','LIKE',"%{$request->search}%")->paginate(12);
                $category= !empty(Category::where('name_category', 'LIKE', "%{$request->search}%")->first()) ?Category::where('name_category','LIKE',"%{$request->search}%")->first()->products:[];
                $products=$products->merge($category);
            }
            return \response()->json($products);
        }
    }
}
