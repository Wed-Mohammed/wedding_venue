<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminAndUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admin_and_user', function(Blueprint $table)
		{
			$table->foreign('city_ID', 'admin_and_user_city')->references('ID')->on('city')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin_and_user', function(Blueprint $table)
		{
			$table->dropForeign('admin_and_user_city');
		});
	}

}
