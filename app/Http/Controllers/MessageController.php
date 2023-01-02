<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Promise\all;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_message(Request $request){

        if ($request->ajax()){

            $validator=Validator::make($request->all(),[
                'message'=>['required','max:300']
            ]);

            if ($validator->fails()){
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $message=Message::create([
                'text_message'=>$request->message,
                'user_id1'=>auth()->user()->id,
                'user_id2'=>$request->user_id2

            ]);

            if (!!$message){
                return response()->json(['success'=>true]);
            }else{
                return \response()->json(['errors'=>'عملیات انجام نشد لطفا دباره امتحان کنید.']);
            }
        }
        else{
            return back();
        }

    }

    public function receiver($id){

        $collection_mess=[];
        $messages1=User::find(auth()->user()->id)->messages1->where('user_id2',$id);
        $messages2=User::find(auth()->user()->id)->messages2->where('user_id1',$id);
        foreach ($messages1 as $mess1) {
            $collection_mess[]=$mess1;
        }
        foreach ($messages2 as $mess2){
            $collection_mess[]=$mess2;
        }
        $messages=collect($collection_mess)->sortBy('id')->values()->all();

        return view('messages',['messages'=>$messages,'id'=>$id]);
    }
}
