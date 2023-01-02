<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=Message::query();
        if ($search=\request('search')){
            $messages->Where('text_message','LIKE',"%{$search}%");
        }


        $messages=$messages->where('user_id2',null)->paginate(10);

        return view('admin.messages.all',compact('messages'));
    }


    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $messages=Message::query()->where('user_id2',null)->paginate(10);
            return view('admin.messages.page',compact('messages'))->render();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return back();
    }


    public function response(Message $message)
    {
        return view('admin.messages.page_response',compact('message'));
    }

    public function response_post(Request $request , Message $message)
    {
        $data=$request->validate([
            'message'=>['required','max:300']
        ]);

        $response=auth()->user()->messages1()->create([
            'text_message'=>$request->message,
            'user_id2'=>$message->user_id1
        ]);
        if ($response){
            $message->update(['response'=>true]);
        }

        return redirect(route('admin.messages.index'));

    }
}
