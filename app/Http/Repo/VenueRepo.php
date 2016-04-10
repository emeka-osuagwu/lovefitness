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

	public function getVenueWhere($field, $value)
	{
		return Venue::where($field, $value)->get();
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

	public function updateVenue($data)
	{
		$update = [
			"name" 		=> $data['name'],
			"email" 		=> $data['email'],
			"phone" 		=> $data['phone'],
			"address" 		=> $data['address'],
			"website" 		=> $data['website'],
		];

		if (isset($data['image']) && isset($data['image']) != null) {
			$update['image'] = $this->getImageUrl();
		}

		Venue::where('id', $data['venue_id'])->update($update);
	}

}