<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Photo;
use App\User;
use App\Order;
use DB;
use Mail;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index()
	{
		$product = Product::all();
        $user = User::all()->count();
        $jml_product = Product::all()->count();
        $terjual = Order::where('status','Di Terima')->count();
        $pesanan = Order::where('status','Menunggu Persetujuan')->count();

		return view('admin.produk-list',compact('product','jml_product','user','terjual','pesanan'));
	}
    public function create()
    {
    	$category = Category::all();

    	return view('admin.produk-create',compact('category'));
    }
    public function store(Request $request)
    {

            $product = New Product; 
    		$product->product_name = request('product_name');
    		$product->slug = str_slug(request('product_name') .'-'. str_random(5));
    		$product->deskripsi = request('deskripsi');
    		$product->harga = request('harga');
    		$product->stock = request('stock');
    		$product->product_kode = str_random(5);
    		$product->category_id = request('category_id');
            $product->save();

            $input=$request->all();
            
            $images=array();
            if($files=$request->file('images')){
                foreach($files as $file){
                    $name=$file->store('photo');
                    $images[]=$name;
                }
            }

            Photo::create([
                'foto'=>  implode("|",$images),
                'product_id' => $product->id,
            ]);

        	return redirect()->route('product.index')->with('success','Berhasil Ditambahkan');
    }
    public function edit($id)
    {
    	$category = Category::all();
    	$product = Product::where('slug',$id)->first();

    	return view('admin.produk-edit',compact('product','category'));
    }
    public function update(Request $request , $id)
    {
 		$product = Product::where('slug',$id)->first();
    	$product->update([
    		'product_name' => request('product_name'),
    		'deskripsi' => request('deskripsi'),
    		'harga' => request('harga'),
    		'stock' => request('stock'),
    		'category_id' => request('category_id'),
    	]);

    	return redirect()->route('product.index')->with('success','Berhasil Di Update');
    }
    public function destroy($id)
    {
    	$product = Product::find($id);
    	$product->delete();

    	return redirect()->back()->with('danger','Berhasil Di Hapus');
    }
    public function show($id)
    {
        $product = DB::table('photos')
                    ->join('products','photos.product_id','=','products.id')
                    ->join('categories','products.category_id','=','categories.id')
                    ->select('categories.*','products.*','photos.*')
                    ->where('slug',$id)
                    ->first();

        return view('produk-show',compact('product'));
    }
    public function sendEmail(Request $request)
    {
        try{
            Mail::send('email', ['nama' => 'Muhammad Fatichul Ichsan', 'pesan' => 'pesanan Barang'], function ($message) use ($request)
            {
                $message->subject($request->judul);
                $message->from('donotreply@kiddy.com', 'TokoSPT');
                $message->to($request->email);
            });
            return back()->with('alert-success','Berhasil Kirim Email');
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
    public function test($id)
    {
        return $id;
    }
}
