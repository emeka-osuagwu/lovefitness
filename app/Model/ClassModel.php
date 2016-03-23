<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
	protected $table = 'classes';

	protected $primaryKey = 'id';
	
	protected $fillable = [	
		"name",
		"location",
		"time",
		"duration",
		"gym_id",
		"price",
		"class_group_id",
	];

	public function group()
	{
		return $this->belongsTo('App\Model\ClassGroup');
	}

	public function gym()
	{
		return $this->belongsTo('App\Model\Gym');
	}
}
