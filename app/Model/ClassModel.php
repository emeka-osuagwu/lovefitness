<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
	protected $table = 'users';

	protected $fillable = [	
		"name",	
		"description",	
	];
}
