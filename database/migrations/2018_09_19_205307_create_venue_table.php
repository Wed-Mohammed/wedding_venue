<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venue', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('name', 100);
			$table->text('discerption', 65535);
			$table->string('address');
			$table->integer('number');
			$table->integer('contact_number');
			$table->integer('mobile')->nullable();
			$table->string('email', 150);
			$table->string('website', 250)->nullable();
			$table->integer('maximum_capacity');
			$table->integer('price')->nullable();
			$table->text('offers', 65535)->nullable();
			$table->integer('payment_method');
			$table->text('extra_information', 65535);
			$table->integer('latitude_location');
			$table->integer('longitude_location');
			$table->integer('city_ID')->index('venue_city');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('venue');
	}

}
