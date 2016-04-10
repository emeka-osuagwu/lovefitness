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
			$table->integer('venue_id')->unsigned()->nullable();
			$table->string('image')->nullable();
			

			$table->foreign('venue_id')
				->references('id')
				->on('venues')
				->onDelete('cascade');

			$table->foreign('class_group_id')
				->references('id')
				->on('groups');
			
			$table->timestamps();
			//$table->integer('Instructor')->nullabel()->unsigned();
			// $table->foreign('Instructor')
			// 	->references('id')
			// 	->on('users');
			
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
