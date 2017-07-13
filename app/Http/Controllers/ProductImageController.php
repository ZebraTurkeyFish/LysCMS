<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductImage;
class ProductImageController extends Controller
{
	public function store(Request $r)
	{
		# code...
	}

	public function update(Request $r)
	{
		for ($i=0; $i < sizeof($r->id); $i++) 
		{
			$image = ProductImage::find($r->id[$i]);
			$image->sort_order = $r->sort_order[$i];
			$image->save();
		}
		return back();
	}
}
