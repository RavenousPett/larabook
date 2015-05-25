<?php

namespace Larabook\Statuses;

use Laracasts\Commander\Events\EventGenerator;
use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Presenter\PresentableTrait;

class Status extends \Eloquent {

	use EventGenerator, PresentableTrait;

	// Fillable fields for a new Status
	protected $fillable = ['body'];

	// Path to the presenter for a status
	protected $presenter = 'Larabook\Statuses\StatusPresenter';


	// Publish a new status
	public static function publish($body){

		$status = new static(compact('body'));

		$status->raise(new StatusWasPublished($body));

		return $status;

	}

	// A status belongs to a user
	public function user(){	

		return $this->belongsTo('Larabook\Users\User');

	}

}