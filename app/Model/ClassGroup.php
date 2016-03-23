<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
	protected $table = 'class_groups';

	protected $fillable = [	
		"name",
		"description",
	];
}
