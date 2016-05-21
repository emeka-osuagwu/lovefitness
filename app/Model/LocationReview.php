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
		"location_id",	
	];

	public function location()
	{
		return $this->belongsTo('App\Model\Location');
	}
}

