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

	public function checkUserPassword($data)
	{
		
		$old_password 	=  bcrypt($data['old_password']);
		
		if ($old_password ==  Auth::user()->password) {
			return 2;
		}

		// $new_password_1 	=  $data['new_password_1'];
		// $new_password_2 	=  $data['new_password_2'];



		return Auth::user()->password;
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

}