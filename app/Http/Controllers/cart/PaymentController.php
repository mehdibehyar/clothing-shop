<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use App\Http\Headers\Cart\Cart;
use App\Models\Information;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use shopid\zarinPal;


class PaymentController extends Controller
{
    public function create_information()
    {
        if (Cart::all()->count()==0){
            return back();
        }
        return view('cart.create_information');
    }

    public function payment(Request $request)
    {
        if (Cart::all()->count()==0){
            return back();
        }
        $validate=$request->validate([
            'firstname'=>['required','max:250','min:2'],
            'lastname'=>['required','max:250','min:2'],
            'phone'=>['required','regex:/^(?:98|\+98|0098|0)?9[0-9]{9}$/'],
            'state'=>['required','max:250'],
            'city'=>['required','max:250'],
            'address'=>['required','max:250','min:30'],
            'postal_code'=>['required'],
            'description'=>['nullable','max:250']
        ]);


        $cartItems=Cart::all();
        $cartItems=$cartItems->filter(function ($item){
            return !is_null($item['product']);
        });


        foreach ($cartItems as $item){
            if ($item['product']->statistics()->where('color_id',$item['color'])->where('size_id',$item['size'])->first()->number<=0) {
                $title=$item['product']->title;
                alert()->error('ناموفق.',"متاسفانه {$title}   موجود نیست.");
                return back();
            }
            if (!Product::find($item['product']->id)){
                alert()->error('ناموفق.','چنین محصولی وجود ندارد.');
                return back();
            }else{
                $product=Product::find($item['product']->id);
            }
            if (!$product->statistics()->where('color',$item['color'],'size',$item['size'])){
                alert()->error('ناموفق.','رنگ یا سایز موجود نیست');
                return back();
            }



        }
        if ($cartItems->count()){
//            $price=$cartItems->sum(function ($cart){
//                return $cart['product']->price * $cart['quantity'];
//            });
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

            $cartItems=$cartItems->mapWithKeys(function ($cart){
                return [$cart['product']->id=>['quantity'=>$cart['quantity'],'color'=>$cart['color'],'size'=>$cart['size']]];
            });


            $order=auth()->user()->orders()->create([
                'status'=>'unpaid',
                'price'=>$price,
            ]);

            $order->informations()->create([
                'firstname'=>$validate['firstname'],
                'lastname'=>$validate['lastname'],
                'phone'=>$validate['phone'],
                'state'=>$validate['state'],
                'city'=>$validate['city'],
                'address'=>$validate['address'],
                'postal_code'=>$validate['postal_code'],
                'description'=>!is_null($validate['description'])?$validate['description']:null
            ]);

            $order->products()->attach($cartItems);
            //make zarinpal object
            $zarinpal = new zarinPal([
                "merchantId" => "90353dcc-a11d-460a-97e7-2634e957ac7a",

            ]);

            //make a request

            try {
                $des_numbere=Str::random();
                $order->update(['tracking_code'=>$des_numbere]);
                $payment=$order->payments()->create([
                    'resnumber'=>$des_numbere
                ]);
                $request = $zarinpal->apiRequest([
                    "amount" => $price*10,
                    'description'=>$des_numbere,
                    "callbackurl" => route('payment.callback',$payment->id),
                    "email"=>'mehdibehyar.100@gmail.com',
                    "mobile" => auth()->user()->phone,
                ]);
                $requestDecode=json_decode($request);
            } catch (Exception $error) {
                var_dump(json_decode($error->getMessage()));
            }


            Cart::flush();
            return redirect()->intended($requestDecode->url);
        }
    }


    public function callback(Payment $payment,Request $request)
    {

        $errors=[
            '-9'=>'خطای اعتبار سنجی',
            '-10'=>'ای پی و يا مرچنت كد پذيرنده صحيح نيست',
            '-11'=>'مرچنت کد فعال نیست لطفا با تیم پشتیبانی ما تماس بگیرید',
            '-12'=>'تلاش بیش از حد در یک بازه زمانی کوتاه.',
            '-15'=>'ترمینال شما به حالت تعلیق در آمده با تیم پشتیبانی تماس بگیرید',
            '-16'=>'سطح تاييد پذيرنده پايين تر از سطح نقره اي است.',
            '100'=>'عملیات موفق',
            '-30'=>'اجازه دسترسی به تسویه اشتراکی شناور ندارید',
            '-31'=>'حساب بانکی تسویه را به پنل اضافه کنید مقادیر وارد شده واسه تسهیم درست نیست',
            '-32'=>'Wages is not valid, Total wages(floating) has been overload max amount.',
            '-33'=>'درصد های وارد شده درست نیست',
            '-34'=>'مبلغ از کل تراکنش بیشتر است',
            '-35'=>'تعداد افراد دریافت کننده تسهیم بیش از حد مجاز است',
            '-40'=>'Invalid extra params, expire_in is not valid.',
            '-50'=>'مبلغ پرداخت شده با مقدار مبلغ در وریفای متفاوت است',
            '-51'=>'پرداخت ناموفق',
            '-52'=>'خطای غیر منتظره با پشتیبانی تماس بگیرید',
            '-53'=>'اتوریتی برای این مرچنت کد نیست',
            '-54'=>'اتوریتی نامعتبر است',
            '101'=>'عملیات موفق'
        ];

        try {
            $zarinpal=new zarinPal(["merchantId" => "90353dcc-a11d-460a-97e7-2634e957ac7a",]);
            $verify = $zarinpal->verify(
                [
                    "authority" => $request->Authority,
                    "amount" => $payment->order->price*10
                ]
            );
            $verifyrequest=json_decode($verify);
            $payment->order()->update(['response_info'=>$verify]);

            if (isset($verifyrequest->code)){
                if ($verifyrequest->code==100 || $verifyrequest->code==101){
                    $payment->update(['status'=>1]);

                    $payment->order->products->each(function ($item)use($payment){
                        $product=$item->statistics()->where('color_id',$item['pivot']['color'])->where('size_id',$item['pivot']['size'])->first();
                        $product->update(['number'=>$product->number-$item['pivot']['quantity']]);
                    });



                    $payment->order()->update(['status'=>'paid']);
                    alert()->success('موفق',$errors[json_decode($verify,true)['code']]);
                    return redirect(route('cart'));
                }
            }

            alert()->error('ناموفق',$errors[json_decode($verify,true)['error']['code']]);
            return redirect(route('cart'));

        } catch (Exception $error) {
            var_dump(json_decode($error->getMessage())->error->code);
        }
    }
}


//{#1435 ▼ // app\Http\Controllers\cart\PaymentController.php:122
//    +"code": 101
//+"message": "Verified"
//+"card_hash": "CA9258D47D9B9B83E2A3F457FDBA914559953C9A36E119FBC440076DC20145A8483015E766C845DA6582E6E015224664B0F58BDF54F7FDEEB276C72093F8E47B"
//+"card_pan": "603770******4966"
//+"ref_id": 39216717601
//+"fee_type": "Merchant"
//+"fee": 0
//+"order_id": null
//}
