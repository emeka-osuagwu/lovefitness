<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassCategory extends Model
{
	protected $table = 'class_categories';

	protected $fillable = [	
		"name",
	];

	public function groups()
	{
		return $this->hasMany('App\Model\ClassGroup');
	}
}
