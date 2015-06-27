<?php

namespace Larabook\Users;

class UserRepository{
	
	// Persist a user
	public function save(User $user){

		return $user->save();

	}

	// Get a paginated list of all users
	public function getPaginated($howMany = 25){

		return User::orderBy('username', 'asc')->simplePaginate($howMany);

	}

	// Fetch a user by their username
	public function findByUsername($username){

		return User::with(['statuses' => function($query)
		{
			$query->latest();
			
		}])->whereUsername($username)->first();

	}

}