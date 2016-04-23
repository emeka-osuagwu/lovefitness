<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function index()
	{

		if (Auth::user()->role == 0) 
		{
			$user 		= $this->userRepo->getLoginUser(); 			
			$session 	= $this->classRepo->getUserClass(); 			
			$location 	= $this->locationRepo->getLocationWhere('id', $session->first()->classes->location_id); 			
			return view('dashboard.pages.index', compact('user', 'session', 'location'));
		}
		elseif (Auth::user()->role == 1) 
		{
			$users		= $this->userRepo->getAllUser();
			$groups 	= $this->classRepo->getAllGroup();
			$reviews 	= $this->reviewRepo->getAllReview();	
			$classes 	= $this->classRepo->getAllClass();
			$catetgories 	= $this->classRepo->getAllCategory();
			return view('dashboard.pages.index', compact('groups', 'classes', 'catetgories', 'users', 'reviews'));
		}
	}

	public function getAddAdmin()
	{
		$users = $this->userRepo->getAllUser();
		return view('dashboard.pages.create_user_admin', compact('users'));
	}

	public function postAddAdmin(Request $request)
	{
		$this->userRepo->updateUserRole($request->all());
		Session::flash('message', 'good');
		return back();
	}
}
