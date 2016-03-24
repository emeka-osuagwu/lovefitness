<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

	protected $table = 'reviews';

	protected $primaryKey = 'id';

	protected $fillable = [	
		"name",	
		"email",	
		"website",	
		"class_model_id",	
		"comment",	
	];

	public function classes()
	{
		return $this->belongsTo('App\Model\ClassModel');
	}

}
