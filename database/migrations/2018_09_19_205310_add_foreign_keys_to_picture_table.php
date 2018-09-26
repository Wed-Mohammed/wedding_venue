<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPictureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('picture', function(Blueprint $table)
		{
			$table->foreign('admin_and_user_ID', 'picture_admin_and_user')->references('ID')->on('admin_and_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('service_ID', 'picture_service')->references('ID')->on('service')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('venue_ID', 'picture_venue')->references('ID')->on('venue')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('picture', function(Blueprint $table)
		{
			$table->dropForeign('picture_admin_and_user');
			$table->dropForeign('picture_service');
			$table->dropForeign('picture_venue');
		});
	}

}
