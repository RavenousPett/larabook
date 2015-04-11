<?php

namespace Larabook\Statuses;

use Larabook\Users\User;

class StatusRepository{

	public function getAllForUser(User $user){

		// hasMany doesn't work :(
		// return $user->statuses;
		return Status::whereUserId($user->id)->get();

	}

	// Save a new status for a user
	public function save(Status $status, $userId){

		return User::findOrFail($userId)->statuses()->save($status);

	}
 
}