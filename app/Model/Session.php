<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

	protected $table = 'sessions';
	
	protected $fillable = [
		"user_id",
		"classes_id",
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
