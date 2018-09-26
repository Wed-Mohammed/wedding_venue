<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBookingContractTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('booking_contract', function(Blueprint $table)
		{
			$table->foreign('admin_and_user_ID', 'booking_contract_admin_and_user')->references('ID')->on('admin_and_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('gift_ID', 'booking_contract_gift')->references('ID')->on('gift')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('service_ID', 'booking_contract_service')->references('ID')->on('service')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('venue_ID', 'booking_contract_venue')->references('ID')->on('venue')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('booking_contract', function(Blueprint $table)
		{
			$table->dropForeign('booking_contract_admin_and_user');
			$table->dropForeign('booking_contract_gift');
			$table->dropForeign('booking_contract_service');
			$table->dropForeign('booking_contract_venue');
		});
	}

}
