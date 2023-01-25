<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function show_orders()
    {
        $orders=auth()->user()->orders()->paginate(12);
        return view('orders.index',compact('orders'));
    }
}
