<?php

namespace App\Http\Repo;

use App\Model\Gym;

class GymRepo
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
			//"image"	=> $data['image'],
			"number"	=> json_encode($data['phone']),
			"hours"	=> $data['hours'],
			"description"	=> $data['description'],
			"price"		=> $data['price'],
			"website"	=> $data['website'],
		];

		Gym::create($create);
	}

	public function updateGym($data)
	{
		return $data;
	}

}