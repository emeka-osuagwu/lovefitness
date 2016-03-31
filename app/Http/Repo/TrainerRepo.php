<?php

namespace App\Http\Repo;

use App\Model\Trainer;

class TrainerRepo
{

	public function getTrainerWhere($field, $value)
	{
		return Trainer::where($field, $value)->get();
	}

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

		Trainer::create($create);
	}

	public function update($data)
	{
	
		$update = [
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

		Trainer::where('id', $data['trainer_id'])->update($update);

	}


}