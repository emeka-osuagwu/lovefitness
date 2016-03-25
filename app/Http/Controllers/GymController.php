<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GymController extends Controller
{
	
	public function index()
	{
		$gyms = $this->gymRepo->getAllGym();
		return view('dashboard.pages.gyms', compact('gyms'));
	}

	public function create(Request $request)
	{
		$this->gymRepo->createGym($request->all());
		return back();	
	}

	public function edit($id)
	{
		$gym = $this->gymRepo->getGymById($id);
		return view('dashboard.pages.edit_gym', compact('gym'));
	}
}
