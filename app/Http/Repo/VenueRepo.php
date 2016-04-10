<?php

namespace App\Http\Repo;

use App\Model\Venue;
use App\Http\Repo\CloudderRepo;

class VenueRepo extends CloudderRepo
{

	public function getAllVenue()
	{
		return Venue::all();
	}

	public function createVenue($data)
	{
		$create = [
			"name" 		=> $data['name'],
			"email" 		=> $data['email'],
			"phone" 		=> $data['phone'],
			"address" 		=> $data['address'],
			"website" 		=> $data['website'],
		];

		if (isset($data['image']) && isset($data['image']) != null) {
			$create['image'] = $this->getImageUrl();
		}

		Venue::create($create);
	}


}