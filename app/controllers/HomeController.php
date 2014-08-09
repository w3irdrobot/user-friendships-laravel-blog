<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		return View::make('home.index');
	}

	public function postIndex()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			return Redirect::intended('dashboard');
		}

		return Redirect::to('/')
			->withInput()
			->withErrors('That username/password combo does not exist.');
	}

	public function getLogout()
	{
		Auth::logout();

		return Redirect::to('/');
	}

}
