<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $fillable = [
		"name",
		"type",
		"address",
		"email",
		"location",
		"image",
		"longitude",
		"latitude",
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

}
