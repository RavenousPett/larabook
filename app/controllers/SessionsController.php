<?php

use Larabook\Forms\SignInForm;

class SessionsController extends \BaseController {

	private $signInForm;

	public function __construct(SignInForm $signInForm){

		$this->signInForm = $signInForm;

		$this->beforeFilter('guest', ['except' => 'destroy']);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$formData = Input::only('email', 'password');

		$this->signInForm->validate($formData);

		if(Auth::attempt($formData)){

			Flash::message('Welcome Back!');
			return Redirect::intended('statuses');

		}

	}

	// Log a user out of larabook
	public function destroy(){

		Auth::logout();

		Flash::message('You have now been logged out.');

		return Redirect::home();

	}

}
