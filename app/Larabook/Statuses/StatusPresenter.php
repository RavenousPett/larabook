<?php

namespace Larabook\Statuses;

use Laracasts\Presenter\Presenter;

class StatusPresenter extends Presenter{

	// Display how long it's been since the published date
	public function timeSincePublished(){

		return $this->created_at->diffForHumans();

	}

}