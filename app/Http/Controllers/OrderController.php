<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    public function index()
    {
    	$order = Order::where('user_id',auth()->user()->id)->get();

    	return view('pesanan',compact('order'));
    }
     public function store(Request $request)
    {

            $order = New Order; 
    		$order->buyer_name = Auth()->user()->name;
    		$order->product_name = request('product_name');
    		$order->user_id = Auth()->user()->id;
    		$order->total = request('harga');
            $order->save();

        	return redirect()->route('order.index')->with('success','Berhasil Memesan');
    }
}
