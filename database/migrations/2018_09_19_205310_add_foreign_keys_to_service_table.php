<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('service', function(Blueprint $table)
		{
			$table->foreign('booking_ID', 'service_booking')->references('ID')->on('booking_contract')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('city_ID', 'service_city')->references('ID')->on('city')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('service_type_ID', 'service_service_type')->references('ID')->on('service_type')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('venue_ID', 'service_venue')->references('ID')->on('venue')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('service', function(Blueprint $table)
		{
			$table->dropForeign('service_booking');
			$table->dropForeign('service_city');
			$table->dropForeign('service_service_type');
			$table->dropForeign('service_venue');
		});
	}

}
