<?php

namespace App\Http\Controllers;

use App\Http\Repo\GymRepo;
use App\Http\Repo\UserRepo;
use App\Http\Repo\ClassRepo;
use App\Http\Repo\VenueRepo;
use App\Http\Repo\ReviewRepo;
use App\Http\Repo\TrainerRepo;
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
		$this->gymRepo 	= new GymRepo;
		$this->userRepo 	= new UserRepo;
		$this->classRepo 	= new ClassRepo;
		$this->venueRepo 	= new VenueRepo;
		$this->reviewRepo 	= new ReviewRepo;
		$this->trainerRepo 	= new TrainerRepo;
		$this->cloudderRepo 	= new CloudderRepo;
	}
}
