<?php

namespace App\Http\Repo;

use App\Model\Store;
use App\Http\Repo\CloudderRepo;

class StoreRepo extends CloudderRepo
{

	public function getAllStore()
	{
		return Store::all();
	}
	
	public function createStore($data)
	{
		$create = [
			"name" 	=> $data['name'],
			"address" 	=> $data['address'],
			"email" 	=> $data['email'],
			"location" 	=> $data['location'],
			"number" 	=> $data['phone'],
			"longitude" 	=> $data['longitude'],
			"latitude" 	=> $data['latitude'],
			"email" 	=> $data['email'],
			"website" 	=> $data['website'],
		];
		
		if (isset($data['image']) && isset($data['image']) != null) {
			$create['image'] = $this->getImageUrl();
		}

		Store::create($create);
	}

}