<?php

namespace App\Http\Repo;

use App\Model\Review;

class ReviewRepo
{

	public function getAllReview()
	{
		return Review::with('classes')->get();
	}

	public function createReview($data)
	{
		$create = [
			"email" 	=> $data['email'],
			"name" 	=> $data['name'],
			"website" 	=> $data['website'],
			"comment" 	=> $data['comment'],
			"classes_id" 	=> $data['class_id'],
		];
		
		Review::create($create);
	}

	public function deleteReview($id)
	{
		Review::find($id)->delete();
	}
}