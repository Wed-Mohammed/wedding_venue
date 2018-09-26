<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingContractTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booking_contract', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->integer('price');
			$table->text('more_details', 65535);
			$table->date('date_start');
			$table->date('date_end');
			$table->integer('admin_and_user_ID')->index('booking_contract_admin_and_user');
			$table->integer('venue_ID')->index('booking_contract_venue');
			$table->integer('service_ID')->index('booking_contract_service');
			$table->integer('gift_ID')->index('booking_contract_gift');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booking_contract');
	}

}
