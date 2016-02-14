<?php namespace App\Http\Controllers;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| User Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "Form page" for the application and
	| is configured to only allow guests
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Load the Json File.
	 *
	 * @return array
	 */
	public function getIndex() {
		
		return view('welcome');

	}


}
