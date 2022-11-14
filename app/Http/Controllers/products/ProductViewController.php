<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductViewController extends Controller
{
    public function show()
    {
        return view('products.products');
    }

    public function show_single_product(Product $product)
    {
        return view('products.single_product',compact('product'));
    }
}
