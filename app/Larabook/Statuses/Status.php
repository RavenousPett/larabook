<?php

namespace Larabook\Statuses;

use Laracasts\Commander\Events\EventGenerator;
use Larabook\Statuses\Events\StatusWasPublished;

class Status extends \Eloquent {

	use EventGenerator;

	// Fillable fields for a new Status
	protected $fillable = ['body'];

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