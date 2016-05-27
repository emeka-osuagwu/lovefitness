<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
	protected $table = 'classes';

	protected $primaryKey = 'id';
	
	protected $fillable = [	
		"time",
		"logo",
		"price",
		"name",
		"image",
		"duration",
		"group_id",
		"location_id",
	];

	public function group()
	{
		return $this->belongsTo('App\Model\Group');
	}

	public function review()
	{
		return $this->hasMany('App\Model\Review');
	}

	public function location()
	{
		return $this->belongsTo('App\Model\Location');
	}

}
