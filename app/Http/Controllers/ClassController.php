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
		$groups = $this->classRepo->classGroup();
		return view('app.pages.class_group', compact('groups'));
	}

	public function class_list($group)
	{
		$datas =  $this->classRepo->getGroupClass($group)->first();
		return view('app.pages.class_list', compact('datas'));
	}

	public function view($class_name)
	{
		$class =  $this->classRepo->getClassByName($class_name)->first();
		return view('app.pages.class_view', compact('class'));
	}

	public function getCreateCategory()
	{
		return view('dashboard.pages.add_class_category');	
	}

	public function postCreateCategory(Request $request)
	{
		$this->classRepo->createClassCategory($request->all());
		return back();
	}

	public function createGroup(Request $request)
	{
		$this->classRepo->createClassGroup($request->all());
		return back();
	}

	public function getCreateClass($value='')
	{
		$gyms 		= $this->classRepo->getAllGym();
		$groups 	= $this->classRepo->classGroup();
		$categories 	= $this->classRepo->getAllCategory();

		return view('dashboard.pages.add_class', compact('categories', 'groups', 'gyms'));
		
	}

	public function postCreateClass(Request $request)
	{
		$this->classRepo->createClass($request->all());
		return back();
	}
}
