<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->string('image')->nullable();
			$table->string('phone');
			$table->string('email');
			$table->string('website')->nullable();
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
		Schema::drop('venues');
	}
}
