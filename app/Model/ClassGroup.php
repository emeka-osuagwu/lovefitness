<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
	protected $table = 'class_groups';

	protected $primaryKey = 'id';
	
	protected $fillable = [	
		"name",
		"description",
		"class_category_id",
	];

	public function classes()
	{
		return $this->hasMany('App\Model\ClassModel');
	}

	public function groups()
	{
		return $this->belongsTo('App\Model\ClassCategory');
	}
}
