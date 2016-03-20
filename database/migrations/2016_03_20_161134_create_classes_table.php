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
			$table->integer('location')->unsigned()->nullable();
			$table->string('time');
			$table->string('duration');
			$table->float('price');
			$table->integer('Instructor')->nullabel()->unsigned();
			$table->integer('Instructor')->nullabel()->unsigned();
			$table->timestamps();

			$table->foreign('location')
				->references('id')
				->on('gyms');
			
			$table->foreign('Instructor')
				->references('id')
				->on('users');
			
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
