<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rate', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->integer('rate_value');
			$table->integer('venue_ID')->index('rate_venue');
			$table->integer('admin_and_user_ID')->index('rate_admin_and_user');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rate');
	}

}
