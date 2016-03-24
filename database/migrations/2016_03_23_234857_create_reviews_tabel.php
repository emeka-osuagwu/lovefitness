<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTabel extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('comment');
			$table->string('website')->nullable();
			$table->integer('class_model_id')->unsigned();
			$table->timestamps();

			
			$table->foreign('class_model_id')
				->references('id')
				->on('classes');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reviews');
	}
}
