<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainerController extends Controller
{	

	public function create(Request $request)
	{
		return $request->all();
	}

	public function trainers()
	{
		return view('dashboard.pages.trainers');
	}
}
