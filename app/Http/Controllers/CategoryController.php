<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = Category::all();

		return view('admin.kategori-list',compact('categories'));
	}
    public function create()
    {
    	return view('admin.kategori-create');
    }
    public function store(Request $request)
    {
    	Category::create([
    		'category_name' => request('category_name'),
    		'category_slug' => str_slug(request('category_name')),
    	]);

    	return redirect()->route('category.index')->with('success','Berhasil Ditambahkan');
    }
    public function edit($id)
    {
    	$category = Category::where('category_slug',$id)->first();

    	return view('admin.kategori-edit',compact('category'));
    }
    public function update(Request $request , $id)
    {
 		$category = Category::where('category_slug',$id)->first();
    	$category->update([
    		'category_name' => request('category_name'),
    		'category_slug' => str_slug(request('category_name')),
    	]);

    	return redirect()->route('category.index')->with('success','Berhasil Di Update');
    }
    public function destroy($id)
    {
    	$category = Category::find($id);
    	$category->delete();

    	return redirect()->back()->with('danger','Berhasil Di Hapus');
    }
    public function show($id)
    {
        $category = DB::table('products')
                    ->join('categories','products.category_id','=','categories.id')
                    ->select('categories.*','products.*')
                    ->where('category_slug',$id)
                    ->get();

        return dd($category);
    }
}
