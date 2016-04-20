<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	public function login()
	{
		return view('dashboard.pages.login');
	}


	public function create(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email' => 'required|unique:users|max:255',
		]);

		if ($validator->fails()) {
			Session::flash('error-register', 'error-register');
			return back();
		}

		Session::flash('success-register', 'success-register');
		$this->userRepo->createUser($request->all());
		return redirect('login');
	}

	public function view()
	{
		$user =  $this->userRepo->getUserWhere('id', Auth::user()->id)->first();
		return view('app.pages.account', compact('user'));
	}

	public function update(Request $request)
	{
		$request['user_id'] = Auth::user()->id;
		$this->userRepo->updateUser($request->all());
		return back();
	}


}
