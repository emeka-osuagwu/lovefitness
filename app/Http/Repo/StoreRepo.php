<?php

namespace App\Http\Repo;

use App\Model\Store;
use App\Http\Repo\CloudderRepo;

class StoreRepo extends CloudderRepo
{

	public function createStore($data)
	{
		return $data;
	}

}