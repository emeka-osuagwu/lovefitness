<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function index()
	{
		$groups 	= $this->classRepo->getAllGroup();
		$classes 	= $this->classRepo->getAllClass();
		$catetgories 	= $this->classRepo->getAllCategory();
		return view('dashboard.pages.index', compact('groups', 'classes', 'catetgories'));
	}
}
