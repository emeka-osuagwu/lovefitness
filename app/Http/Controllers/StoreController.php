<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

	public function postCreate(Request $request)
	{
		return $this->storeRepo->createStore($request->all());
	}
}
