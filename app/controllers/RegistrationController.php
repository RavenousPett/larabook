<?php

class RegistrationController extends \BaseController {

	/**
	 * Show the form to register the user
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('registration.create');

	}

	public function store()
	{
		
		return Redirect::home();

	}
}
