<?php

namespace App\Http\Repo;

use App\Model\Location;
use App\Http\Repo\CloudderRepo as CloudderRepo;

class LocationRepo extends GymRepo
{
	
	public function getAllLocation()
	{
		return Location::all();
	}

	/*=====================================
	# Gym Methods
	======================================*/
		public function getAllGym()
		{
			return Location::all();
		}	

		public function getGymById($id)
		{
			return Location::where('id', $id)->get();
		}

		public function createGym($data)
		{
			$create = [
				"name"	=> $data['name'],
				"description"	=> $data['description'],
				"hours"	=> $data['hours'],
				"price"		=> $data['price'],
				"address"	=> $data['address'],
				"location"	=> $data['location'],
				"number"	=> $data['phone'],
				"email"	=> $data['email'],
				"website"	=> $data['website'],
				"type"		=> "gym",
			];
			
			if (isset($data['image']) && isset($data['image']) != null) {
				$create['image'] = $this->getImageUrl();
			}
			
			Location::create($create);
		}

		public function updateGym($data)
		{
			$update = [
				"name"	=> $data['name'],
				"address"	=> $data['address'],
				"email"	=> $data['email'],
				"location"	=> $data['location'],
				"number"	=> $data['phone'],
				"hours"	=> $data['hours'],
				"description"	=> $data['description'],
				"price"		=> $data['price'],
				"website"	=> $data['website'],
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$update['image'] = $this->getImageUrl();
			}


			Location::where('id', $data['gym_id'])->update($update);
		}

		public function deleteGym($id)
		{
			Location::find($id)->delete();
		}
	/*=====================================
	# Gym Methods
	======================================*/


}