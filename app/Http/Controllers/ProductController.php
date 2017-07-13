<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;

class ProductController extends Controller
{
    public function index()
	{
		$products 	= Product::with('category')->get();
		$categories = ProductCategory::get();
		return view('product.index', compact('products', 'categories'));
	}

	public function show($id)
	{
		$product 	= Product::find($id);
		$categories = ProductCategory::get();
		return view('product.product', compact('product', 'categories'));
	}

	public function store(Request $r)
	{
		$product = new Product;

		$product->product 		= $r->product;
		$product->category_id 	= $r->category;
		$product->price 		= $r->price;

		$product->save();

		return redirect('product/' . $product->id);
	}

	public function update(Request $r)
	{
		$product = Product::find($r->id);

		$product->product 		= $r->product;
		$product->category_id 	= $r->category;
		$product->price 		= $r->price;
		$product->description 	= nl2br($r->description);

		$product->save();

		return redirect('product/' . $product->id);
	}
}
