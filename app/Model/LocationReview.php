<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LocationReview extends Model
{
	protected $table = 'location_reviews';
	
	protected $fillable = [	
		"name",	
		"email",	
		"website",	
		"comment",	
		"gym_id",	
	];

	public function location()
	{
		return $this->belongsTo('App\Model\Location');
	}
}

