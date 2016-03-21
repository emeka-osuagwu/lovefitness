<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
	public function index()
	{
		return view('app.pages.class_group');
	}

	public function class_group()
	{
		return view('app.pages.class_group');
	}

	public function class_list()
	{
		return view('app.pages.class_list');
	}

	public function view()
	{
		return view('app.pages.class_view');
	}
}
