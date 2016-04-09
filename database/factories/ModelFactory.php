<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Model\User::class, function (Faker\Generator $faker) {
	return [
		'email' 			=> $faker->email,
		'firstname' 		=> $faker->name,
		'lastname' 		=> $faker->name,
		'address' 		=> $faker->address,
		'phone' 		=> $faker->email,
		'post_code' 		=> $faker->email,
		'city' 			=> $faker->name,
		'country' 		=> $faker->email,
		'password' 		=> bcrypt(str_random(10)),
		'remember_token' 	=> str_random(10),
	];
});

$factory->define(App\Model\ClassCategory::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->company,
	];
});

$factory->define(App\Model\ClassGroup::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->company,
		'description' => $faker->address,
		'class_categories_id' => 1,
	];
});
