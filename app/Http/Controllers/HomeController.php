<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $product = DB::table('photos')
                    ->join('products','photos.product_id','=','products.id')
                    ->join('categories','products.category_id','=','categories.id')
                    ->select('categories.*','products.*','photos.*')
                    ->get();

        return view('home',compact('category','product'));
    }
}
