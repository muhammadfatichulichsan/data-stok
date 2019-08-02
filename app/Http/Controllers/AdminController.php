<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Order;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$user = User::all()->count();
    	$product = Product::all()->count();
    	$terjual = Order::where('status','Di Terima')->count();
    	$pesanan = Order::where('status','Menunggu Persetujuan')->count();
        $order = Order::where('status','Menunggu Persetujuan')->get();

    	return view('admin.index',compact('user','product','terjual','pesanan','order'));
    }
}
