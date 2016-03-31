<?php

namespace App\Http\Repo;

use App\Model\Review;

class TrainerRepo
{
	public function createTrainer($data)
	{
		$create = [
			"price" 		=> $data['price'],
			"name" 		=> $data['name'],
			"email" 		=> $data['email'],
			"twitter" 		=> $data['twitter'],
			"friday" 		=> $data['friday'],
			"phone" 		=> $data['phone'],
			"gender" 		=> $data['gender'],
			"sunday" 		=> $data['sunday'],
			"address" 		=> $data['address'],
			"monday" 		=> $data['monday'],
			"tuesday" 		=> $data['tuesday'],
			"thursday" 		=> $data['thursday'],
			"saturday" 		=> $data['saturday'],
			"facebook" 		=> $data['facebook'],
			"instagram" 		=> $data['instagram'],
			"wednsday" 		=> $data['wednsday'],
			"brand_name" 	=> $data['brand_name'],
		];

		return $create;
		Review::create($create);
	}
}