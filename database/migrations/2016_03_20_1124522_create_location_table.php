<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('type');
			$table->string('address');
			$table->string('email');
			$table->string('location');
			$table->string('image')->nullable();
			$table->string('longitude')->nullable();
			$table->string('latitude')->nullable();
			$table->string('number')->nullable();
			$table->string('hours');
			$table->string('description');
			$table->decimal('price');
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
		Schema::drop('locations');
	}
}
