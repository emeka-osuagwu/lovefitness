<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassCategory extends Model
{
	protected $table = 'class_categories';
	protected $primaryKey = 'id';

	protected $fillable = [	
		"name",
		"color",
	];

	public function groups()
	{
		return $this->hasMany('App\Model\ClassGroup');
	}
}
