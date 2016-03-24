<?php

namespace App\Http\Repo;

use App\Model\Review;

class ReviewRepo
{
	public function createReview($data)
	{
		$create = [
			"email" 	=> $data['email'],
			"name" 	=> $data['name'],
			"website" 	=> $data['website'],
			"comment" 	=> $data['comment'],
			"class_model_id" 	=> $data['class_id'],
		];
		
		Review::create($create);
	}
}