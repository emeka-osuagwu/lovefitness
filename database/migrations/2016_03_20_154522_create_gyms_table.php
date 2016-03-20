<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGymsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gyms', function (Blueprint $table) {
			$table->increments('id');
			$table->string('gym_name')->unique();
			$table->string('address');
			$table->string('location');
			$table->string('location');
			$table->float('longitude');
			$table->float('latitude');
			$table->json('numbers');
			$table->string('opening_hours');
			$table->decimal('membership_prices');
			$table->string('website');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gyms');
	}
}
