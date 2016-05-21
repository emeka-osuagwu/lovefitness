<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

	protected $table = 'trainers';
	
	protected $fillable = [	
		"price",
		"name",
		"image",
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
