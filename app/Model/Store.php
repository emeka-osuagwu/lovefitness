<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $fillable = [
		"name",
		"address",
		"email",
		"location",
		"image",
		"longitude",
		"latitude",
		"number",
		"website",
	];

}
