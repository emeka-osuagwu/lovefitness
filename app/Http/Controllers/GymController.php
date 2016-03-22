<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GymController extends Controller
{
	


	public function create(Request $request)
	{
		return $this->gymRepo->createGym($request->all());
	}
}
