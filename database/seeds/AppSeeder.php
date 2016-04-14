<?php

use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	//	factory(App\Model\User::class, 1)->create();
		factory(App\Model\Category::class, 1)->create();
		factory(App\Model\Group::class, 1)->create();
		factory(App\Model\ClassModel::class, 1)->create();
		factory(App\Model\Location::class, 1)->create();
	}
}