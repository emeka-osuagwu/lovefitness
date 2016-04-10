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

	public function edit($id)
	{
		$venue = $this->venueRepo->getVenueWhere('id', $id)->first();
		return view('dashboard.pages.edit_venue', compact('venue'));
	}

	public function update(Request $request)
	{
		$this->venueRepo->updateVenue($request->all());
		Session::flash('message', 'good');
		return back();
	}
}
