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

}
