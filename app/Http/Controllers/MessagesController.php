<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
    	return view('messages.index');
    }

    public function store()
    {
    	
    }

    public function show($id)
    {
    	# code...
    }
}
