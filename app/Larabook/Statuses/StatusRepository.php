<?php

namespace Larabook\Statuses;

use Larabook\Users\User;

class StatusRepository{

	// Save a new status for a user
	public function save(Status $status, $userId){

		return User::findOrFail($userId)->statuses()->save($status);

	}
 
}