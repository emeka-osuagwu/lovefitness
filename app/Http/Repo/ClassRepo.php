<?php

namespace App\Http\Repo;

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
}