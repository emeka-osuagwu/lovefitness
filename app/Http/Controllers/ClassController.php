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













	/*=====================================
	# Classes Methods
	======================================*/

		public function dashboardClasses()
		{
			
			$classes =  $this->classRepo->getAllClass();
			return view('dashboard.pages.classes', compact('classes'));
		}

		public function getCreateClass()
		{
			$gyms 		= $this->gymRepo->getAllGym();
			$groups 	= $this->classRepo->classGroup();
			$venues 	= $this->venueRepo->getAllVenue();
			$categories 	= $this->classRepo->getAllCategory();

			return view('dashboard.pages.add_class', compact('categories', 'groups', 'venues', 'gyms'));	
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
			$venues 	= $this->venueRepo->getAllVenue();
			$class_group 	=  $this->classRepo->classGroup();
			return view('dashboard.pages.edit_class', compact('class', 'venues', 'class_group'));
		}

		public function updateClass(Request $request)
		{
			$this->classRepo->updateClass($request->all());
			Session::flash('message', 'good');
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
			return $groups 	= $this->classRepo->classGroup();
			$categories 	= $this->classRepo->getAllCategory();
			return view('app.pages.class_group', compact('groups', 'categories'));
		}

		public function editClassGroup($id)
		{
			$group =  $this->classRepo->getGroupWhere('id', $id);
			$category 	= $this->classRepo->getCategoryWhere('id', $group->first()->class_category_id);
			$categories 	= $this->classRepo->getAllCategory();
			return view('dashboard.pages.edit_group', compact('group', 'category','categories'));
		}

		public function updateGroup(Request $request)
		{
			$this->classRepo->updateGroup($request->all());
			return back();
		}

		public function dashboardGroups()
		{
			$groups = $this->classRepo->classGroup();
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
			return view('dashboard.pages.add_class_category');	
		}

		public function postCreateCategory(Request $request)
		{
			$this->classRepo->createClassCategory($request->all());
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
