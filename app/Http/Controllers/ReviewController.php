<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
 	public function create(Request $request)
 	{
 		 $this->reviewRepo->createReview($request->all());
 		return back();
 	}
}
