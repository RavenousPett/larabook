<?php

namespace Larabook\Users;

class UserRepository{
	
	// Persist a user
	public function save(User $user){

		return $user->save();

	}

	// Get a paginated list of all users
	public function getPaginated($howMany = 25){

		return User::simplePaginate($howMany);

	}

}