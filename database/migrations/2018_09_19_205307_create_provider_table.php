<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('name', 100);
			$table->string('email', 150);
			$table->integer('phone');
			$table->string('website', 250)->nullable();
			$table->text('extara_information', 65535)->nullable();
			$table->string('address');
			$table->timestamp('data')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('service_ID')->index('provider_service');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider');
	}

}
