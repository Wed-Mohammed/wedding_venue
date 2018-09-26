<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePictureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('picture', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('picture_link');
			$table->integer('venue_ID')->index('picture_venue');
			$table->integer('admin_and_user_ID')->index('picture_admin_and_user');
			$table->integer('service_ID')->index('picture_service');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('picture');
	}

}
