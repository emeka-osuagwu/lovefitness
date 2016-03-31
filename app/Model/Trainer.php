<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

	protected $fillable = [	
		"price",
		"name",
		"email" ,
		"twitter", 
		"friday",
		"phone",
		"gender",
		"sunday",
		"address",
		"monday",
		"tuesday",
		"thursday",
		"saturday",
		"facebook",
		"instagram",
		"wednsday",
		"brand_name",
	];
}
