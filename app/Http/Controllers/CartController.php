<?php

namespace App\Http\Controllers;

use App\Http\Headers\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {

        echo Cart::count($product);

        if (Cart::has($product)){

            echo Cart::update($product,1)->get($product)['quantity'];

        }else{

            Cart::put(
                [
                    'quantity'=>1,
                    'price'=>$product->price
                ],
                $product
            );

        }



    }
}




