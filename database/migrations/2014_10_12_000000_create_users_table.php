<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->index();
			$table->string('username')->unique()->index();
			$table->string('officialname');
			$table->text('profile');
			$table->boolean('staff');
			$table->boolean('supplier');
			$table->string('email')->unique()->index();
			$table->string('password', 60);
			$table->string('billing_id');
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
