<?php 

namespace Larabook\Core;

use App;

trait CommandBus{
	
	// Execute the command
	public function execute($command){

		return $this->getCommandBus()->execute($command);

	}

	// Fetch the command bus
	public function getCommandBus(){

		return App::make('Laracasts\Commander\CommandBus');

	}
	
}