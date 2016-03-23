<?php

namespace App\Http\Repo;

use App\Model\ClassGroup;
use App\Model\ClassCategory;

class ClassRepo
{
	public function getAllClass()
	{
		return 3;
	}	

	public function createClassCategory($data)
	{
		$create = [
			"name"	=> $data['name'],
		];

		ClassCategory::create($create);

	}

	public function createClassGroup($data)
	{
		$create = [
			"name"	=> $data['name'],
			"description"	=> $data['description'],
		];
		
		ClassGroup::create($create);
	}
}