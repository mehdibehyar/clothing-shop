<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Http\Headers\Interest\Interest as InterestC;


class InterestController extends Controller
{
    public function interests()
    {
        return view('interests.interests');
    }

    public function addInterest(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'product'=>['required']
        ]);
        if ($validate->fails()){
            return \response()->json(['errors'=>$validate->errors()->all()]);
        }
        if ($request->ajax()){
            if (!!Product::find($request->product)){
                if (!auth()->check()){
                    if (InterestC::has(Product::find($request->product))){
                        return \response()->json(['success'=>true]);
                    }
                    InterestC::put([],Product::find($request->product));
                    return \response()->json(['success'=>true]);
                }else{
                    if(!!Product::find($request->product)->interests()->where('user_id',auth()->user()->id)->first()){
                        return \response()->json(['success'=>true]);
                    }
                    Product::find($request->product)->interests()->create(['user_id'=>auth()->user()->id]);
                    return \response()->json(['success'=>true]);
                }
            }
            return \response()->json(['errors'=>$validate->errors()->add('not','محصول وجود ندارد.')->all()]);


        }
    }
}
