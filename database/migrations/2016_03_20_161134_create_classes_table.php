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
			$table->integer('gym_id')->unsigned()->nullable();
			$table->string('time');
			$table->string('duration');
			$table->float('price');
			$table->integer('class_group_id')->nullabel()->unsigned();
			//$table->integer('Instructor')->nullabel()->unsigned();
			$table->timestamps();

			$table->foreign('gym_id')
				->references('id')
				->on('gyms')
				->onDelete('cascade');

			$table->foreign('class_group_id')
				->references('id')
				->on('class_groups');
			
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
