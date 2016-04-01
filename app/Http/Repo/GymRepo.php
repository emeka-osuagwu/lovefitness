<?php

namespace App\Http\Repo;

use App\Model\Gym;
use App\Http\Repo\CloudderRepo;

class GymRepo extends CloudderRepo
{
	public function getAllGym()
	{
		return Gym::all();
	}	

	public function getGymById($id)
	{
		return Gym::with('classes')->where('id', $id)->get();
	}

	public function createGym($data)
	{
		$create = [
			"name"	=> $data['name'],
			"address"	=> $data['address'],
			"email"	=> $data['email'],
			"location"	=> $data['location'],
			"image"	=> $this->getImageUrl(),			
			"number"	=> explode(',', $data['phone']),
			"hours"	=> $data['hours'],
			"description"	=> $data['description'],
			"price"		=> $data['price'],
			"website"	=> $data['website'],
		];

		Gym::create($create);
	}

	public function updateGym($data)
	{
	
		$update = [
			"name"	=> $data['name'],
			"address"	=> $data['address'],
			"email"	=> $data['email'],
			"location"	=> $data['location'],
			//"image"	=> $data['image'],
			"number"	=> json_encode($data['phone']),
			"hours"	=> $data['hours'],
			"description"	=> $data['description'],
			"price"		=> $data['price'],
			"website"	=> $data['website'],
		];

		Gym::where('id', $data['gym_id'])->update($update);
	}

	public function deleteGym($id)
	{
		Gym::find($id)->delete();
	}

}