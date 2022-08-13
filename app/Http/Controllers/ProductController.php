<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Http\Requests;

class ProductController extends Controller
{
    public function index(Request $request)
	{
		$products = Product::orderBy('name','ASC')->paginate(5);
		$value = ($request->input('page',1)-1)*5;
		return view('products.list',compact('products'))->with('i',$value);
	}
	
	public function create()
	{
		return view('products.create');
	}
	
	public function store(Request $request)
	{
		$this->validate($request,['name' => 'required', 'description' => 'required']);
		Product::create($request->all());
		return redirect()->route('products.index')->with('success', 'Your product was added successfully!');
	}
	
	public function show($id)
	{
		$product = Product::find($id);
		return view('products.show', compact('product'));
	}
	
	public function edit($id)
	{
		$product = Product::find($id);
		return view('products.edit', compact('product'));
	}
	
	public function update(Request $request,$id)
	{
		$this->validate($request, [
			'name' => 'required',
			'description' => 'required',
			'photo' => 'required',
			'price' => 'required'
			]);
		Product::find($id)->update($request->all());
		return redirect()->route('products.index')->with('success', 'Product updated succesfully');
	}
	
	public function destroy($id)
	{
		Product::find($id)->delete();
		return redirect()->route('products.index')->with('success', 'Product removed succesfully');
	}
}
