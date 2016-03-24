<?php

namespace App\Http\Controllers;

use App\Http\Repo\GymRepo;
use App\Http\Repo\ClassRepo;
use App\Http\Repo\ReviewRepo;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
	{
		$this->gymRepo 	= new GymRepo;
		$this->classRepo 	= new ClassRepo;
		$this->reviewRepo 	= new ReviewRepo;
	}	

}
