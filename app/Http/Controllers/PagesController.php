<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home() {
		$tasks = [
			'Go to the store',
			'Go to the market',
			'Go to the work'

		];

		// this is one way of passing data to views, see below for more
	    return view('my_welecome', [
	    	'tasks' => $tasks,
	    	'foo' => 'foobar'
	    	]);
	}


	public function contacts() {
		$numbers = [
			'919-655-6543',
			'763-654-4535',
			'612-655-2256'
		];


	/*	this is another method of passing data to another view
		note the method doesn't actually exist, everything is stripped
		after "with".......also not that the variable name in the 
		contacts page would be "foobar" no caps, that is what was stripped
		from the method name - NOT the string "foo" passed as an argument*/
		return view('contacts')->withNumbers($numbers)->withFoobar('foo');
	}


	public function about() {
		return view('about');
	}



}
