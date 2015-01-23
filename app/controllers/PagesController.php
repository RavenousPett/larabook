<?php

use Illuminate\Routing\Controller;

class PagesController extends Controller {

	public function home(){

		return View::make('pages.home');

	}

}