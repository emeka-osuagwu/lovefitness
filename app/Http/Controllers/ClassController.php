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

	public function dashboardClasses()
	{
		$classes =  $this->classRepo->getAllClass();
		return view('dashboard.pages.classes', compact('classes'));
	}

	public function getEditClass($id)
	{
		$gyms 		=  $this->classRepo->getAllGym();
		$class 		=  $this->classRepo->getClassByid($id)->first();	
		$class_group 	=  $this->classRepo->classGroup();
		return view('dashboard.pages.edit_class', compact('class', 'gyms', 'class_group'));
	}

	public function dashboardGroups()
	{
		$groups = $this->classRepo->classGroup();
		return view('dashboard.pages.groups', compact('groups'));
	}

	public function editClassGroup($id)
	{
		$group =  $this->classRepo->getGroupWhere('id', $id);
		return view('dashboard.pages.edit_group', compact('group'));
	}

	public function updateClass(Request $request)
	{
		$this->classRepo->updateClass($request->all());
		return back();
	}

	public function updateGroup(Request $request)
	{
		$this->classRepo->updateGroup($request->all());
		return back();
	}
}
