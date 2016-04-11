<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groups', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('color');
			$table->string('description');
			$table->integer('class_category_id')->unsigned();
			$table->timestamps();

			$table->foreign('class_category_id')
				->references('id')
				->on('class_categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('groups');
	}
}
