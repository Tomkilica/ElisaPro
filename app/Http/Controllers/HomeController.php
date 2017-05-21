<?php

namespace App\Http\Controllers;


use App\Products;

class HomeController extends Controller {


	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	  public function __construct(Products $products){
	    	$this->products = $products;
	  } 

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function home()
	{
		$products = $this->products->products;
		 return view('home')->with(['products' => $products]);;
	}

}
