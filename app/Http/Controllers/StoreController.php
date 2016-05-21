<?php

namespace App\Http\Controllers;


use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{


	public function edit($id)
	{
		$store = $this->storeRepo->getStoreWhere('id', $id);
		return view('dashboard.pages.edit_store', compact('store'));
	}

	public function dashboardStores()
	{
		$stores = $this->storeRepo->getAllStore();
		return view('dashboard.pages.stores', compact('stores'));
	}

	public function postCreate(Request $request)
	{
		$this->storeRepo->createStore($request->all());
		Session::flash('message', 'good');
		return back();
	}

	public function update(Request $request)
	{
		$this->storeRepo->updateStore($request->all());
		Session::flash('message', 'good');
		return back();
	}


}
