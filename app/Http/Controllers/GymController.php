<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GymController extends Controller
{
	
	public function index()
	{
		$gyms = $this->locationRepo->getAllGym();
		return view('dashboard.pages.gyms', compact('gyms'));
	}

	public function create(Request $request)
	{
		$this->locationRepo->createGym($request->all());
		Session::flash('message', 'good');
		return back();
	}

	public function edit($id)
	{
		$gym = $this->locationRepo->getGymById($id)->first();
		return view('dashboard.pages.edit_gym', compact('gym'));
	}

	public function update(Request $request)
	{
		$gym = $this->locationRepo->updateGym($request->all());
		Session::flash('message', 'good');
		return back();
	}

	public function delete($id)
	{
		$this->locationRepo->deleteGym($id);
		return back();
	}

	public function createReview(Request $request)
	{
		$this->locationRepo->createReview($request->all());
		return back();
	}
	
}
