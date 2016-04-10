<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenueController extends Controller
{
	

	public function venues()
	{
		# code...
	}

	public function create(Request $request)
	{
		return $this->venue->Repository->createVenue($request->all());
	}


}
