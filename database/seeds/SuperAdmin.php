<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'email' => "admin@gmail.com",
			'password' => bcrypt('pass'),
		]);
	}
}
