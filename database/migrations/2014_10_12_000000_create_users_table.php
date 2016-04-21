<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('role')->default(0);
			$table->integer('status')->default(0);
			$table->string('email')->unique();
			$table->string('firstname')->nullable();
			$table->string('lastname')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->string('post_code')->nullable();
			$table->string('city')->nullable();
			$table->string('country')->nullable();
			$table->string('password', 60);
			$table->rememberToken();
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
		Schema::drop('users');
	}
}
