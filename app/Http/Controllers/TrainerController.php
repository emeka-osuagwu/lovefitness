<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainerController extends Controller
{	

	public function create(Request $request)
	{
		$this->trainerRepo->createTrainer($request->all());
		Session::flash('message', 'good');
		return back();
	}

	public function trainers()
	{
		$trainers =  $this->trainerRepo->getAllTrainers();
		return view('dashboard.pages.trainers', compact('trainers'));
	}

	public function getEdit($id)
	{
		$trainer = $this->trainerRepo->getTrainerWhere('id', $id)->first();
		return view('dashboard.pages.edit_trainer', compact('trainer'));
	}

	public function update(Request $request)
	{
		$this->trainerRepo->update($request->all());
		return back();
	}
}
