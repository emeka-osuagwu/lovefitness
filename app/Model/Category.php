<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
	
	protected $primaryKey = 'id';

	protected $fillable = [	
		"name",
		"color",
	];

	public function groups()
	{
		return $this->hasMany('App\Model\Group');
	}
}
