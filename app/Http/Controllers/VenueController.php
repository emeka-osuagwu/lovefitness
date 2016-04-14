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
		$venues = $this->locationRepo->getAllVenue();
		return view('dashboard.pages.venues', compact('venues'));
	}

	public function create(Request $request)
	{
		$this->locationRepo->createVenue($request->all());
		Session::flash('message', 'good');
		return back();
	}

	public function edit($id)
	{
		$venue = $this->locationRepo->getVenueWhere('id', $id)->first();
		return view('dashboard.pages.edit_venue', compact('venue'));
	}

	public function update(Request $request)
	{
		$this->locationRepo->updateVenue($request->all());
		Session::flash('message', 'good');
		return back();
	}
}
