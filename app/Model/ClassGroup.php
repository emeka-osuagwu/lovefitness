<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
	protected $table		= 'groups';
	protected $primaryKey 	= 'id';
	
	protected $fillable = [	
		"name",
		"description",
		"class_category_id",
	];

	public function classes()
	{
		return $this->hasMany('App\Model\ClassModel');
	}

	public function category()
	{
		return $this->belongsTo('App\Model\ClassCategory');
	}
}
