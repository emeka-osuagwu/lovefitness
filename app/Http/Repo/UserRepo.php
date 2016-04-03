<?php

namespace App\Http\Repo;

use App\Model\User;

class UserRepo extends CloudderRepo
{
	public function createUser($data)
	{
		$create = [
			"city" 			=>$data['city'],
			"email" 		=>$data['email'],
			"phone"	 	=>$data['phone'],
			"country" 		=>$data['country'],
			"address" 		=>$data['address'],
			"lastname" 		=>$data['lastname'],
			"firstname" 		=>$data['firstname'],
			"password" 		=>$data['password'],
			"post_code" 		=>$data['post_code'],
		];
		
		User::create($create);
	}

	public function loginUser($data)
	{
		return $data;
	}

}