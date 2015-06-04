<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->bigIncrements("id");
			$table->string("name");
			$table->string("email")->unique()->nullable();
			$table->string("password");
			$table->tinyInteger("status")->default(1)->unsigned();
			$table->string("activation_code");

			$table->timestamps();
			$table->softDeletes();
			$table->rememberToken();
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
