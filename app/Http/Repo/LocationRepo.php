<?php

namespace App\Http\Repo;

use App\Model\Location;
use App\Model\LocationReview;
use App\Http\Repo\CloudderRepo as CloudderRepo;

class LocationRepo extends GymRepo
{
	
	public function getAllLocation()
	{
		return Location::all();
	}

	public function getLocationWhere($field, $value)
	{
		return Location::where($field, $value)->get();
	}

	public function createReview($data)
	{
		$create = [
			"name" 	=> $data['name'],
			"email" 	=> $data['email'],
			"website" 	=> $data['website'],
			"comment" 	=> $data['comment'],
			"location_id" 	=> $data['gym_id'],
		];

		LocationReview::create($create);
	}

	/*=====================================
	# Gym Methods
	======================================*/
		public function getAllGym()
		{
			return Location::with('classes')->where('type', 'gym')->get();
		}	

		public function getGymById($id)
		{
			return Location::with('reviews')->where('id', $id)->get();
		}

		public function createGym($data)
		{
			$create = [
				"name"	=> $data['name'],
				"description"	=> $data['description'],
				"hours"	=> $data['time'],
				"price"		=> $data['price'],
				"address"	=> $data['address'],
				"location"	=> $data['location'],
				"number"	=> $data['phone'],
				"email"	=> $data['email'],
				"website"	=> $data['website'],
				"type"		=> "gym",
				"image"	=> "http://placehold.it/770x378"
			];
			
			if (isset($data['image']) && isset($data['image']) != null) {
				$create['image'] = $this->getImageUrl();
			}
				
			if (isset($data['longitude']) && isset($data['longitude']) != null) {
				$create['longitude'] = $data['website'];
			}
				
			if (isset($data['latitude']) && isset($data['latitude']) != null) {
				$create['latitude'] = $data['latitude'];
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
				"hours"	=> $data['time'],
				"description"	=> $data['description'],
				"price"		=> $data['price'],
				"website"	=> $data['website'],
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$update['image'] = $this->getImageUrl();
			}


			if (isset($data['longitude']) && isset($data['longitude']) != null) {
				$update['longitude'] = $data['website'];
			}
				
			if (isset($data['latitude']) && isset($data['latitude']) != null) {
				$update['latitude'] = $data['latitude'];
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

	/*=====================================
	# Venue Methods
	======================================*/

		public function getAllVenue()
		{
			return Location::where('type', 'venue')->get();
		}

		public function getVenueWhere($field, $value)
		{
			return Location::where($field, $value)->get();
		}

		public function createVenue($data)
		{
			$create = [
				"name" 		=> $data['name'],
				"email" 		=> $data['email'],
				"number" 		=> $data['phone'],
				"address" 		=> $data['address'],
				"website" 		=> $data['website'],
				"type" 			=> "venue",
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$create['image'] = $this->getImageUrl();
			}

			if (isset($data['longitude']) && isset($data['longitude']) != null) {
				$create['longitude'] = $data['website'];
			}
				
			if (isset($data['latitude']) && isset($data['latitude']) != null) {
				$create['latitude'] = $data['latitude'];
			}

			Location::create($create);
		}

		public function updateVenue($data)
		{
			$update = [
				"name" 		=> $data['name'],
				"email" 		=> $data['email'],
				"number" 		=> $data['phone'],
				"address" 		=> $data['address'],
				"website" 		=> $data['website'],
				"type" 			=> "venue",
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$update['image'] = $this->getImageUrl();
			}

			if (isset($data['longitude']) && isset($data['longitude']) != null) {
				$update['longitude'] = $data['website'];
			}
				
			if (isset($data['latitude']) && isset($data['latitude']) != null) {
				$update['latitude'] = $data['latitude'];
			}

			Location::where('id', $data['venue_id'])->update($update);
		}

}