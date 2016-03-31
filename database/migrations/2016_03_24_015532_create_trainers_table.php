<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('brand_name')->nullable();
			$table->string('gender');
			$table->float('price');
			$table->string('address');
			$table->string('phone');
			$table->string('email');
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('instagram')->nullable();
			$table->string('monday')->nullable();
			$table->string('tuesday')->nullable();
			$table->string('wednsday')->nullable();
			$table->string('thursday')->nullable();
			$table->string('friday')->nullable();
			$table->string('saturday')->nullable();
			$table->string('sunday')->nullable();
			$table->string('image')->nullable();
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
		Schema::drop('trainers');
	}
}
