<?php

namespace App\Http\Repo;

use DB;
use App\Model\ClassGroup;
use App\Model\ClassModel;
use App\Http\Repo\GymRepo;
use App\Model\ClassCategory;
use App\Http\Repo\CloudderRepo as CloudderRepo;

class ClassRepo extends GymRepo
{


		public function classGroup()
		{
			return ClassGroup::with('classes')->get();
		}

	/*=====================================
	# Classes Methods
	======================================*/
		public function getAllClass()
		{
			return ClassModel::with('group')->get();
		}
	/*=====================================
	# Classes Methods
	======================================*/


	/*=====================================
	# Category Methods
	======================================*/
		public function getAllCategory()
		{
			return ClassCategory::with('groups')->get();
		}
	
		public function createClassGroup($data)
		{
			$create = [
				"name"		=> $data['name'],
				"description"		=> $data['description'],
				"class_category_id"	=> $data['category_id'],
			];
			
			ClassGroup::create($create);
		}


	/*=====================================
	# Category Methods
	======================================*/







	public function getClassByName($class_name)
	{
		return ClassModel::with('gym', 'review')->where('name', $class_name)->get();
	}

	public function getClassByid($id)
	{
		return ClassModel::with('gym', 'review')->where('id', $id)->get();
	}



	public function getGroupWhere($field, $value)
	{
		return ClassGroup::where($field, $value)->get();
	}

	public function getCategoryWhere($field, $value)
	{
		return ClassGroup::where($field, $value)->get();
	}

	public function createClassCategory($data)
	{
		$create = [
			"name"	=> $data['name'],
		];

		ClassCategory::create($create);

	}

	public function createClass($data)
	{
		$create = [
			"name" 		=> $data['name'],
			"gym_id" 		=> $data['gym_id'],
			"time" 			=> $data['time'],
			"duration" 		=> $data['duration'],
			"price" 		=> $data['price'],
			"class_group_id" 	=> $data['category_id'],
		];

		if (isset($data['image']) && isset($data['image']) != null) {
			$create['image'] = $this->getImageUrl();
		}

		ClassModel::create($create);
	}

	public function getGroupClass($group)
	{
		return	ClassGroup::with('classes')->where('name', $group)->get();
	}

	public function updateClass($data)
	{
		$update = [
			"name" 		=> $data['name'],
			"gym_id" 		=> $data['gym_id'],
			"time" 			=> $data['time'],
			"duration" 		=> $data['duration'],
			"price" 		=> $data['price'],
			"class_group_id" 	=> $data['category_id'],
		];

		if (isset($data['image']) && isset($data['image']) != null) {
			$update['image'] = $this->getImageUrl();
		}
		
		ClassModel::where('id', $data['class_id'])->update($update);
	}

	public function updateGroup($data)
	{
		$update = [
			"name"	=> $data['name'],
			"description"	=> $data['description'],
		];
		
		ClassGroup::where('id', $data['group_id'])->update($update);
	}

	public function updateCategory($data)
	{
		$update = [
			"name"	=> $data['name'],
		];

		ClassCategory::where('id', $data['category_id'])->update($update);
	}

}