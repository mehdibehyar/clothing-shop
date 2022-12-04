<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use App\Http\Headers\Cart\Cart;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function addToCart(Request $request,Product $product)
    {
        $data=Validator::make($request->all(),[
            'color'=>'required|exists:colors,id',
            'size'=>'required|exists:sizes,id'
        ]);

        if ($data->fails())
        {
            return response()->json(
                ['errors'=>$data->errors()->all()]
            );
        }

        if (!!$product->statistics->where('size_id',$request->size)->where('color_id',$request->color)->first()){
            if ($product->statistics->where('size_id',$request->size)->where('color_id',$request->color)->first()->number<=0){
                $title=$product->title;
                return response()->json(['errors'=>$data->errors()->add('color_size',"متاسفانه {$title}   موجود نیست.")->all()]);
            }
            if (Cart::has($product) && Cart::getAll($product)->where('size',$request->size)->where('color',$request->color)->first()){
                return response()->json(['errors'=>$data->errors()->add('not','از قبل در سبد خرید وجود دارد.')->all()]);

            }else{

                Cart::put(
                    [
                        'quantity'=>1,
                        'price'=>$product->price,
                        'color'=>$request->color,
                        'size'=>$request->size
                    ],
                    $product
                );

            }
        }else{
            return response()->json(['errors'=>$data->errors()->add('color_size','این نوع سایز و رنگ که شما انتخاب کردید موجود نمیباشد')->all()]);
        }
        return response()->json(['success'=>true]);
    }


    public function cart()
    {
        return view('cart.cart');
    }

    public function update(Request $request)
    {
        $validate=Validator::make($request->all(),['quantity'=>'required','id'=>'required']);
        if ($validate->fails()){
            return \response()->json(['errors'=>$validate->errors()->all()]);
        }
        if (Cart::has($request->id)){
            Cart::update($request->id,['quantity'=>$request->quantity]);
            return \response()->json(['success'=>true]);
        }
        return response()->json(['errors'=>$validate->errors()->add('not','همچین محصولی در سبد خرید وجود ندارد.')->all()]);



    }

    public function delete($id)
    {
        if (Cart::has($id)){
            if (Cart::delete($id)){
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['errors'=>'عملیات حذف ناموفق بود لطفا دباره امتحان کنید.']);
            }
        }
        return response()->json(['errors'=>'همچین محصولی در سبد خرید وجود ندارد.']);


    }


    public function update_the_basket(Request $request)
    {
        if ($request->ajax()){
            if (Cart::all()->count()!=0){
                $arr=[];
                foreach (Cart::all() as $cart){
                    $arr[]=$cart['product']->discounts->sum(function ($des)use($cart){
                        $p=$cart['product']->price/100*$des->percent;
                        $p1=$cart['product']->price-$p;
                        return $p1*$cart['quantity'];
                    })>0?$cart['product']->discounts->sum(function ($des)use($cart){
                        $p=$cart['product']->price/100*$des->percent;
                        $p1=$cart['product']->price-$p;
                        return $p1*$cart['quantity'];
                    }):$cart['price']*$cart['quantity'];
                }
                $price=collect($arr)->sum(function ($item){
                    return $item;
                });

                return response()->json($price);
            }
            return response()->json(0);
        }
    }
}
