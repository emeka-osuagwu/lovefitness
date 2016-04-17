<?php

namespace App\Http\Repo;

use App\User;

class UserRepo extends CloudderRepo
{
	
	public function getAllUser()
	{
		return User::all();
	}

	public function createUser($data)
	{
		$create = [
			"email" 	=>$data['email'],
			"password" 	=>bcrypt($data['password']),
		];
		
		User::create($create);
	}

	public function getUserWhere($field, $value)
	{
		return User::where($field, $value)->get();
	}

	public function updateUser($data)
	{
		
		$update = [
			"city" 			=>$data['city'],
			"email" 		=>$data['email'],
			"phone"	 	=>$data['phone'],
			"country" 		=>$data['country'],
			"address" 		=>$data['address'],
			"lastname" 		=>$data['lastname'],
			"firstname" 		=>$data['firstname'],
			"post_code" 		=>$data['post_code'],
		];

		User::where('id', $data['user_id'])->update($update);
	}

}