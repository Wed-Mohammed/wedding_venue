<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReveiwTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reveiw', function(Blueprint $table)
		{
			$table->foreign('admin_and_user_ID', 'reviw_admin_and_user')->references('ID')->on('admin_and_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('venue_ID', 'reviw_venue')->references('ID')->on('venue')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reveiw', function(Blueprint $table)
		{
			$table->dropForeign('reviw_admin_and_user');
			$table->dropForeign('reviw_venue');
		});
	}

}
