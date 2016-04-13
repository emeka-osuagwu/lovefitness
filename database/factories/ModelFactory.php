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
		'color' => "red",
	];
});

$factory->define(App\Model\ClassGroup::class, function (Faker\Generator $faker) {
	return [
		'name' 		=> $faker->company,
		'description' 		=> $faker->address,
		'class_category_id' 	=> 1,
	];
});

$factory->define(App\Model\ClassModel::class, function (Faker\Generator $faker) {
	return [
		'time' 			=> "1:20pm - 10:30pm",
		'price' 			=> 13434,
		'name' 		=> $faker->company,
		'duration' 		=> $faker->address,
		'location_id' 		=> 1,
		'location_name' 	=> "venues",
		'class_group_id' 	=> 1,
	];
});

$factory->define(App\Model\Gym::class, function (Faker\Generator $faker) {
	return [
		'name' 	=> $faker->name,
		'address' 	=> $faker->address,
		'email' 		=> $faker->email,
		'location' 	=> $faker->address,
		'image' 	=> $faker->image,
		'number' 	=> 09984984938,
		'hours' 	=> "1:20pm - 10:30pm",
		'description' 	=> $faker->address,
		'price' 		=> 122323,
		'website' 	=> $faker->address,
	];
});
