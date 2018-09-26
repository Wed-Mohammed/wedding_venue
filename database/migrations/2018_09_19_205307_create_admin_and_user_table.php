<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminAndUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_and_user', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('name', 100);
			$table->string('password');
			$table->string('email', 150);
			$table->integer('phone')->nullable();
			$table->binary('type_of_account', 50);
			$table->string('website', 250)->nullable();
			$table->text('extara_information', 65535)->nullable();
			$table->timestamp('data')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('city_ID')->index('admin_and_user_city');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_and_user');
	}

}
