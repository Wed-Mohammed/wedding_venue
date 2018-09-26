<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReveiwTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reveiw', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->text('comment', 65535);
			$table->integer('admin_and_user_ID')->index('reviw_admin_and_user');
			$table->integer('venue_ID')->index('reviw_venue');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reveiw');
	}

}
