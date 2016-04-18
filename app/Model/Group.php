<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	protected $table		= 'groups';
	protected $primaryKey 	= 'id';
	
	protected $fillable = [	
		"name",
		"image",
		"description",
		"category_id",
	];

	public function classes()
	{
		return $this->hasMany('App\Model\Classes');
	}

	public function category()
	{
		return $this->belongsTo('App\Model\Category');
	}

}
