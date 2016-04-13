<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
	protected $fillable = [
		"name",
		"address",
		"image",
		"phone",
		"email"
	];


	public function classes()
	{
		return $this->hasMany('App\Model\ClassModel');
	}
}
