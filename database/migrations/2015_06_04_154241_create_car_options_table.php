<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_options', function(Blueprint $table)
		{
            $table->increments('id');

            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('car_models')->onDelete('cascade');

            $table->string('title');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('car_options');
	}

}
