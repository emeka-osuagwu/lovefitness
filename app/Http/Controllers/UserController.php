<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	public function create(Request $request)
	{

		$validator = Validator::make($request->all(), [
			'email' => 'required|unique:users|max:255',
		]);

		if ($validator->fails()) {
			$message = "bad";
			return view('app.pages.register', compact('message'));
		}

		$message = "good";
		$this->userRepo->createUser($request->all());
		return view('app.pages.register', compact('message'));
	}
}
