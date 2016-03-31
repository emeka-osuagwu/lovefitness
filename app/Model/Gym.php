<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{

	protected $fillable = [	
		"name",	
		"address",	
		"email",	
		"location",	
		"image",	
		"number",	
		"hours",	
		"description",	
		"price",	
		"website",	
	];

	public function classes()
	{
		return $this->hasMany('App\Model\ClassModel');
	}

	protected $casts = [
		"number" => "json"
	];
}
