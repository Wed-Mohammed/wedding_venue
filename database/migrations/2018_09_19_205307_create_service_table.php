<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('name', 100);
			$table->text('discription', 65535);
			$table->integer('price');
			$table->date('date_start');
			$table->date('date_end');
			$table->integer('service_type_ID')->index('service_service_type');
			$table->integer('booking_ID')->index('service_booking');
			$table->integer('city_ID')->index('service_city');
			$table->integer('venue_ID')->index('service_venue');
			$table->text('extra_detais', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service');
	}

}
