<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

class ProductCategoryController extends Controller
{
	public function index()
	{
		$categories = ProductCategory::all();
		return view('category.index', compact('categories'));
	}

	public function show($id)
	{
		$products 	= Product::where('category_id', $id)->get();
		$category 	= ProductCategory::find($id);
		return view('category.category', compact('products', 'category'));
	}

	public function store(Request $r)
	{
		$category = new ProductCategory;
		$category->category = $r->category;
		$category->save();

		return back();
	}
}
