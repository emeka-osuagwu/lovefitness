<?php

namespace App\Http\Controllers;

use App\Http\Repo\UserRepo;
use App\Http\Repo\ColorRepo;
use App\Http\Repo\ClassRepo;
use App\Http\Repo\StoreRepo;
use App\Http\Repo\ReviewRepo;
use App\Http\Repo\TrainerRepo;
use App\Http\Repo\LocationRepo;
use App\Http\Repo\CloudderRepo;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
	{
		$this->userRepo 	= new UserRepo;
		$this->colorRepo 	= new ColorRepo;
		$this->classRepo 	= new ClassRepo;
		$this->storeRepo 	= new StoreRepo;
		$this->reviewRepo 	= new ReviewRepo;
		$this->trainerRepo 	= new TrainerRepo;
		$this->locationRepo 	= new LocationRepo;
		$this->cloudderRepo 	= new CloudderRepo;
	}
}
