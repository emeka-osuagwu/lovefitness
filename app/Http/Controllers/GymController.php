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
}
