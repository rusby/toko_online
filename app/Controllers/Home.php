<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		// return view('layout');
	    return view('hello/world',['data'=>'Hello world juga']);
	}

	//--------------------------------------------------------------------

}
