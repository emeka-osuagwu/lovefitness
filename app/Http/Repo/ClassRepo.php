<?php

namespace App\Http\Repo;

use DB;
use App\Model\Group;
use App\Model\Classes;
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
				"price" 		=> $data['price'],
				"location_id" 		=> $data['location'],
				"group_id" 		=> $data['group_id'],
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$create['image'] = $this->getImageUrl();
			}
			
			Classes::create($create);
		}

		public function updateClass($data)
		{
			$update = [
				"name" 		=> $data['name'],
				"time" 			=> $data['time'],
				"duration" 		=> $data['duration'],
				"price" 		=> $data['price'],
				"location_id" 		=> $data['location'],
				"group_id" 		=> $data['group_id'],
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$update['image'] = $this->getImageUrl();
			}
			
			Classes::where('id', $data['class_id'])->update($update);
		}

		public function getClassLocation($table, $value)
		{
			return DB::table($table)->where('id', $value);
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
	/*=====================================
	# Category Methods
	======================================*/












	public function updateCategory($data)
	{
		$update = [
			"name"	=> $data['name'],
			"color"		=> $data['color'],
		];

		Category::where('id', $data['category_id'])->update($update);
	}
}