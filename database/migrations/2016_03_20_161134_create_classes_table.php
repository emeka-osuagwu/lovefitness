<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->float('price');
			$table->string('time');
			$table->string('duration');
			$table->integer('class_group_id')->unsigned()->nullable();
			$table->string('location_name');
			$table->integer('location_id');
			$table->string('image')->nullable();

			$table->foreign('class_group_id')
				->references('id')
				->on('groups');
			
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
		Schema::drop('classes');
	}
}
