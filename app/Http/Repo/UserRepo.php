<?php

namespace App\Http\Repo;

use Auth;
use App\User;

class UserRepo extends CloudderRepo
{
	
	public function getAllUser()
	{
		return User::all();
	}

	public function getLoginUser()
	{
		return User::where('id', Auth::user()->id)->get();
	}

	public function getAllAdmin()
	{
		return User::where('role', 2)->orWhere('role', 1)->get();
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
			"address" 		=>$data['address'],
			"lastname" 		=>$data['lastname'],
			"firstname" 		=>$data['firstname'],
			"post_code" 		=>$data['post_code'],
			"status" 		=>1,
		];

		if (isset($data['image']) && isset($data['image']) != null) {
			$update['image'] = $this->getImageUrl();
		}

		User::where('id', $data['user_id'])->update($update);
	}

	public function updateUserRole($data)
	{
		$update = [
			"role" => $data['role']
		];

		User::where('id', $data['user_id'])->update($update);
	}

}