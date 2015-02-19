<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->integer('role_id')->length(10)->unsigned()->default(3);
			$table->string('username')->nullable();
			$table->string('password')->nullable();
			$table->string('coupon_code')->nullable();
			$table->string('reservation')->nullable();
			$table->string('firstname')->nullable();
			$table->string('lastname')->nullable();
			$table->string('mi')->nullable();
			$table->string('address')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('civil_status')->nullable();
			$table->string('gender')->nullable();
			$table->string('occupation')->nullable();
			$table->integer('family')->nullable();
			$table->string('learn_source')->nullable();
			$table->string('area')->nullable();
			$table->string('dealer')->nullable();
			$table->string('model')->nullable();
			$table->string('sales')->nullable();
			$table->string('color1')->nullable();
			$table->string('color2')->nullable();
			$table->string('color3')->nullable();
			$table->string('car_order')->nullable();
			$table->integer('price')->nullable();
			$table->integer('design')->nullable();
			$table->integer('size')->nullable();
			$table->integer('features')->nullable();
			$table->integer('brand')->nullable();
			$table->string('other_models')->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->foreign('role_id')->references('id')->on('roles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
