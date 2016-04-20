<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{

	public function index()
	{
		$colors = $this->colorRepo->getAllColor();
		return view('dashboard.pages.colors',  compact('colors'));	
	}

	public function create (Request $request)
	{
		
		$checkColorExist = $this->colorRepo->checkColorExist($request['name']);
		
		if ($checkColorExist->count() > 0) {
			Session::flash('duplicate', 'duplicate');
			return back();
		}

		$this->colorRepo->createColor($request->all());
		Session::flash('success', 'success');
		return back();
	}

}
