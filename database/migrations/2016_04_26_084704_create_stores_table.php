<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stores', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('address');
			$table->string('email');
			$table->string('location');
			$table->string('image')->nullable();
			$table->float('longitude')->nullable();
			$table->float('latitude')->nullable();
			$table->integer('number')->nullable();
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
		Schema::drop('stores');
	}
}
