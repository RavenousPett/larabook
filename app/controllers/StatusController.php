<?php

use Larabook\Core\CommandBus;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;
Use Larabook\Forms\PublishStatusForm;

class StatusController extends \BaseController {

	use CommandBus;

	protected $statusRepository;

	function __construct(PublishStatusForm $publishStatusForm, StatusRepository $statusRepository){

		$this->statusRepository = $statusRepository;
		$this->publishStatusForm = $publishStatusForm;

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	

		$statuses = $this->statusRepository->getAllForUser(Auth::user());

		return View::make('statuses/index', compact('statuses'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	// Save a new status
	public function store()
	{
		$this->publishStatusForm->validate(Input::only('body'));
	
		$status = $this->execute(
			new PublishStatusCommand(Input::get('body'), Auth::user()->id) 
		);

		Flash::message('Your status has been updated');

		return Redirect::back();

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
