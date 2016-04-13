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
		factory(App\Model\User::class, 1)->create();
		factory(App\Model\ClassCategory::class, 5)->create();
		factory(App\Model\ClassGroup::class, 5)->create();
		factory(App\Model\ClassModel::class, 5)->create();
		factory(App\Model\Gym::class, 5)->create();
	}
}