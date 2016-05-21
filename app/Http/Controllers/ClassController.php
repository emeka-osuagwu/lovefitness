<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
	public $new_class;

	public function index()
	{
		return view('app.pages.class_group');
	}

	public function view($id)
	{
		$class =  $this->classRepo->getClassWhere('id', $id)->first();
		return view('app.pages.class_view', compact('class'));
	}

	/*=====================================
	# Classes Methods
	======================================*/

		public function class_list($group)
		{
			$datas =  $this->classRepo->getGroupWhere('name', $group)->first();
			return view('app.pages.class_list', compact('datas'));
		}

		public function dashboardClasses()
		{
			
			$classes =  $this->classRepo->getAllClass();
			return view('dashboard.pages.classes', compact('classes'));
		}

		public function getCreateClass()
		{
			$groups 	= $this->classRepo->getAllGroup();
			$locations 	= $this->locationRepo->getAllLocation();
			$categories 	= $this->classRepo->getAllCategory();

			return view('dashboard.pages.add_class', compact('categories', 'groups', 'locations'));	
		}

		public function postCreateClass(Request $request)
		{
			$this->classRepo->createClass($request->all());
			Session::flash('message', 'good');
			return back();
		}

		public function getEditClass($id)
		{
			$class 		=  $this->classRepo->getClassByid($id)->first();	
			$groups 	=  $this->classRepo->getAllGroup();
			$locations 	=  $this->locationRepo->getAllLocation();
			return view('dashboard.pages.edit_class', compact('class', 'locations', 'groups'));
		}

		public function updateClass(Request $request)
		{
			$this->classRepo->updateClass($request->all());
			Session::flash('message', 'good');
			return back();
		}

		public function createSession(Request $request)
		{
			$this->classRepo->joinClass($request->all());
			return back();
		}
	/*=====================================
	# Classes Methods
	======================================*/

	/*=====================================
	# Groups Methods
	======================================*/

		public function addClassGroup()
		{
			$categories = $this->classRepo->getAllCategory();
			return view('dashboard.pages.add_class_group', compact('categories'));
		}
		
		public function createGroup(Request $request)
		{
			$this->classRepo->createClassGroup($request->all());
			Session::flash('message', 'good');
			return back();
		}

		public function class_group()
		{
			$groups 	= $this->classRepo->getAllGroup();
			$categories 	= $this->classRepo->getAllCategory();
			return view('app.pages.class_group', compact('groups', 'categories'));
		}

		public function editClassGroup($id)
		{
			$group 	=  $this->classRepo->getGroupWhere('id', $id);
			$categories 	= $this->classRepo->getAllCategory();
			return view('dashboard.pages.edit_group', compact('group','categories'));
		}

		public function updateGroup(Request $request)
		{
			$this->classRepo->updateGroup($request->all());
			Session::flash('message', 'good');
			return back();
		}

		public function dashboardGroups()
		{
			$groups = $this->classRepo->getAllGroup();
			return view('dashboard.pages.groups', compact('groups'));
		}

		public function deleteGroup($id)
		{
			return "will delete in a bit";
		}
	/*======================================
	# Category Methods
	=======================================*/

	/*======================================
	# Category Methods
	=======================================*/
		
		public function dashboardCategory()
		{
			$categorys=  $this->classRepo->getAllCategory();
			return view('dashboard.pages.categorys', compact('categorys'));
		}

		public function getCreateCategory()
		{
			$colors =  $this->colorRepo->getAllColor();
			return view('dashboard.pages.add_class_category', compact('colors'));	
		}

		public function postCreateCategory(Request $request)
		{
			$this->classRepo->createCategory($request->all());
			Session::flash('message', 'good');
			return back();
		}

		public function editCategory($id)
		{
			$category =  $this->classRepo->getCategoryWhere('id', $id);
			return view('dashboard.pages.edit_category', compact('category'));
		}

		public function updateCategory(Request $request)
		{
			$this->classRepo->updateCategory($request->all());
			Session::flash('message', 'good');
			return back();
		}
	/*=====================================
	======================================*/

}



