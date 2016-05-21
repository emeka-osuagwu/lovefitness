<?php

namespace App\Http\Repo;

use Carbon\Carbon;
use App\Model\Color;
use Illuminate\Support\Facades\DB;

class ColorRepo
{
	
	public function getAllColor()
	{
		return Color::get();
	}

	public function getColorWhere($field, $value)
	{
		return Color::where($field, $value)->get();
	}

	public function checkColorExist($name)
	{
		return Color::where('name', $name)->get();
	}

	public function createColor($data)
	{

		foreach ($data['name'] as $color ) {
			$create[] = [
				"name" 	=> $color,
				"created_at" 	=> Carbon::now(),
				"updated_at" 	=> Carbon::now(),
			];
		}
		DB::table('colors')->insert($create);
	}

	public function updateColor($data)
	{
		$update = [
			"name" => $data['name']
		];

		Color::where('id', $data['color_id'])->update($update);
	}
}