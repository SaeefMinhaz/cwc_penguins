<?php

class SigninController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Signin Page Controller
	|--------------------------------------------------------------------------
	*/

	public function showSignin()
	{
		return View::make('signin');
	}

}
