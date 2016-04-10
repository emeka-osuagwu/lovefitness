<?php

namespace App\Http\Controllers;


use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenueController extends Controller
{
	

	public function venues()
	{
		$venues = $this->venueRepo->getAllVenue();
		return view('dashboard.pages.venues', compact('venues'));
	}

	public function create(Request $request)
	{
		$this->venueRepo->createVenue($request->all());
		Session::flash('message', 'good');
		return back();
	}


}
