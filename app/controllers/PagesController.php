<?php

use Illuminate\Routing\Controller;

class PagesController extends BaseController {

	public function home(){

		return View::make('pages.home');

	}

}