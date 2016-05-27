<?php

namespace App\Http\Repo;

use DB;
use Auth;
use App\Model\Group;
use App\Model\Classes;
use App\Model\Session;
use App\Model\Category;
use App\Http\Repo\GymRepo;
use App\Http\Repo\CloudderRepo as CloudderRepo;

class ClassRepo extends GymRepo
{

	public function getAllGroup()
	{
		return Group::with('category')->get();
	}

	public function getClassByid($id)
	{
		return Classes::with('review','location','group')->where('id', $id)->get();
	}

	/*=====================================
	# Classes Methods
	======================================*/
		
		public function getAllClass()
		{
			return Classes::with('group')->get();
		}

		public function getClassWhere($field, $value)
		{
			return Classes::with('location')->where($field, $value)->get();
		}

		public function createClass($data)
		{
			$create = [
				"name" 		=> $data['name'],
				"time" 			=> $data['time'],
				"duration" 		=> $data['duration'],
				"price" 			=> $data['price'],
				"location_id" 		=> $data['location'],
				"group_id" 		=> $data['group_id'],
				"image"		=> "http://placehold.it/377x236",
				"logo"			=> "http://placehold.it/100x63"
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$create['image'] = $this->getImageUrl();
			}

			if (isset($data['logo']) && isset($data['logo']) != null) {
				$create['logo'] = $this->getImageUrl();
			}
			
			Classes::create($create);
		}

		public function updateClass($data)
		{
			$update = [
				"name" 		=> $data['name'],
				"time" 			=> $data['time'],
				"duration" 		=> $data['duration'],
				"price" 			=> $data['price'],
				"location_id" 		=> $data['location'],
				"group_id" 		=> $data['group_id'],
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$update['image'] = $this->getImageUrl();
			}

			if (isset($data['logo']) && isset($data['logo']) != null) {
				$update['logo'] = $this->getImageUrl();
			}
			
			Classes::where('id', $data['class_id'])->update($update);
		}

		public function getClassLocation($table, $value)
		{
			return DB::table($table)->where('id', $value);
		}

		public function joinClass($data)
		{
			$create = [
				"user_id" 	=> Auth::user()->id,
				"classes_id" 	=> $data['class_id']
			];
		
			Session::create($create);
		}

		public function getUserClass()
		{
			return Session::with('classes')->where('user_id', Auth::user()->id)->get();
		}
	/*=====================================
	# Classes Methods
	======================================*/

	/*=====================================
	# Group Methods
	======================================*/
		
		
		public function getGroupWhere($field, $value)
		{
			return Group::with('classes', 'category')->where($field, $value)->get();
		}

		public function createClassGroup($data)
		{
			$create = [
				"name"		=> $data['name'],
				"description"		=> $data['description'],
				"category_id"		=> $data['category_id'],
				"image"		=> "http://placehold.it/377x236"
			];
			
			if (isset($data['image']) && isset($data['image']) != null) {
				$create['image'] = $this->getImageUrl();
			}
			
			Group::create($create);
		}

		public function updateGroup($data)
		{
			$update = [
				
				"name"		=> $data['name'],
				"description"		=> $data['description'],
				"category_id"		=> $data['category_id'],
			];
			
			if (isset($data['image']) && isset($data['image']) != null) {
				$update['image'] = $this->getImageUrl();
			}
			
			Group::where('id', $data['group_id'])->update($update);
		}
	/*=====================================
	# Category Methods
	======================================*/

	/*=====================================
	# Category Methods
	======================================*/
		
		public function getCategoryWhere($field, $value)
		{
			return Category::where($field, $value)->get();
		}

		public function getAllCategory()
		{
			return Category::with('groups')->get();
		}
	
		public function createCategory($data)
		{
			$create = [
				"name"	=> $data['name'],
				"color"		=> $data['color'],
			];

			Category::create($create);

		}

		public function updateCategory($data)
		{
			$update = [
				"name"	=> $data['name'],
				"color"		=> $data['color'],
			];

			Category::where('id', $data['category_id'])->update($update);
		}
	/*=====================================
	# Category Methods
	======================================*/











}