<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::query();
        if ($search=\request('search')){
            $orders->Where('status','LIKE',"%{$search}%")->orWhere('tracking_code','LIKE',"%{$search}%");
        }
        if (\request('status')) {
            $orders->where('status', 'paid');
        }


        $orders=$orders->paginate(10);
        return view('admin.cart.all',compact('orders'));
    }


    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $orders=Order::query()->paginate(10);
            return view('admin.cart.page',compact('orders'))->render();
        }

    }



    public function single_order(Order $order)
    {
        return view('admin.cart.order',compact('order'));
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
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect(route('admin.orders.index'));
    }
}
