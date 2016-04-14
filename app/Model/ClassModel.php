<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
	protected $table = 'classes';

	protected $primaryKey = 'id';
	
	protected $fillable = [	
		"name",
		"time",
		"duration",
		"price",
		"location_name",
		"location_id",
		"class_group_id",
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
