<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
	public function index()
	{
		return view('pages.class_group');
	}

	public function class_group()
	{
		return view('pages.class_group');
	}

	public function class_list()
	{
		return view('pages.class_list');
	}

	public function view()
	{
		return view('pages.class_view');
	}
}
