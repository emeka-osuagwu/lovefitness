<?php

namespace App\Http\Repo;

use App\Model\ClassGroup;
use App\Model\ClassModel;
use App\Http\Repo\GymRepo;
use App\Model\ClassCategory;

class ClassRepo extends GymRepo
{
	public function getAllClass()
	{
		return ClassModel::with('group')->get();
	}

	public function getClassByName($class_name)
	{
		return ClassModel::with('gym', 'review')->where('name', $class_name)->get();
	}

	public function getClassByid($id)
	{
		return ClassModel::with('gym', 'review')->where('id', $id)->get();
	}

	public function getAllCategory()
	{
		return ClassCategory::all();
	}

	public function classGroup()
	{
		return ClassGroup::all();
	}

	public function createClassCategory($data)
	{
		$create = [
			"name"	=> $data['name'],
		];

		ClassCategory::create($create);

	}

	public function createClassGroup($data)
	{
		$create = [
			"name"	=> $data['name'],
			"description"	=> $data['description'],
		];
		
		ClassGroup::create($create);
	}

	public function createClass($data)
	{
		$create = [
			"name" 	=> $data['name'],
			"gym_id" 	=> $data['gym_id'],
			"time" 		=> $data['time'],
			"duration" 	=> $data['duration'],
			"price" 	=> $data['price'],
			"class_group_id" 	=> $data['category_id'],
		];

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
		
		ClassModel::where('id', $data['class_id'])->update($update);
	}

}