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

	public function getClassByid($id)
	{
		return ClassModel::with('venue', 'review')->where('id', $id)->get();
	}

	/*=====================================
	# Classes Methods
	======================================*/
		
		public function getAllClass()
		{
			return ClassModel::with('group','venue')->get();
		}

		public function createClass($data)
		{
			$create = [
				"name" 		=> $data['name'],
				"time" 			=> $data['time'],
				"duration" 		=> $data['duration'],
				"price" 		=> $data['price'],
				"venue_id" 		=> $data['venue_id'],
				"class_group_id" 	=> $data['group_id'],
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$create['image'] = $this->getImageUrl();
			}

			ClassModel::create($create);
		}

		public function updateClass($data)
		{
			$update = [
				"name" 		=> $data['name'],
				"time" 			=> $data['time'],
				"duration" 		=> $data['duration'],
				"price" 		=> $data['price'],
				"venue_id" 		=> $data['venue_id'],
				"class_group_id" 	=> $data['group_id'],
			];

			if (isset($data['image']) && isset($data['image']) != null) {
				$update['image'] = $this->getImageUrl();
			}
			
			ClassModel::where('id', $data['class_id'])->update($update);
		}
	/*=====================================
	# Classes Methods
	======================================*/


	/*=====================================
	# Group Methods
	======================================*/
		
		public function createClassGroup($data)
		{
			$create = [
				"name"		=> $data['name'],
				"color"			=> $data['color'],
				"description"		=> $data['description'],
				"class_category_id"	=> $data['category_id'],
			];
			
			ClassGroup::create($create);
		}

		public function updateGroup($data)
		{
			$update = [
				
				"name"		=> $data['name'],
				"color"			=> $data['color'],
				"description"		=> $data['description'],
				"class_category_id"	=> $data['category_id'],
			];
			
			ClassGroup::where('id', $data['group_id'])->update($update);
		}

	/*=====================================
	# Category Methods
	======================================*/



	/*=====================================
	# Category Methods
	======================================*/
		public function getAllCategory()
		{
			return ClassCategory::with('groups')->get();
		}

	/*=====================================
	# Category Methods
	======================================*/







	public function getClassByName($class_name)
	{
		return ClassModel::with('gym', 'review')->where('name', $class_name)->get();
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

	public function getGroupClass($group)
	{
		return	ClassGroup::with('classes')->where('name', $group)->get();
	}



	public function updateCategory($data)
	{
		$update = [
			"name"	=> $data['name'],
		];

		ClassCategory::where('id', $data['category_id'])->update($update);
	}

}