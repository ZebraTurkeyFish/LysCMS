<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessagesController extends Controller
{
    public function index()
    {
    	$messages 	= Messages::paginate(10);
    	$count 		= Messages::where('read', NULL)->count();
    	return view('messages.index', compact('messages', 'count'));
    }

    public function store()
    {
    	
    }

    public function show($id)
    {
    	$message 	= Messages::find($id);
    	$count 		= Messages::where('read', NULL)->count();
    	return view('messages.message', compact('message', 'count'));
    }
}
