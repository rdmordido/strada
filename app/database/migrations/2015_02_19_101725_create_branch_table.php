<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('branches',function($table){
			$table->increments('id');
			$table->integer('dealer_id')->length(10)->unsigned();
			$table->string('code')->unique();
			$table->string('name')->nullable();
			$table->string('location_id')->nullable();
			$table->string('company')->nullable();
			$table->string('contact_person')->nullable();
			$table->string('email')->nullable();
			$table->foreign('dealer_id')->references('id')->on('dealers')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('location_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('branches');
	}

}
