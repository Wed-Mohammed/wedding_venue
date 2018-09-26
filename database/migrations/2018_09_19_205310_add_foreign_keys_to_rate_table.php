<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rate', function(Blueprint $table)
		{
			$table->foreign('admin_and_user_ID', 'rate_admin_and_user')->references('ID')->on('admin_and_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('venue_ID', 'rate_venue')->references('ID')->on('venue')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rate', function(Blueprint $table)
		{
			$table->dropForeign('rate_admin_and_user');
			$table->dropForeign('rate_venue');
		});
	}

}
