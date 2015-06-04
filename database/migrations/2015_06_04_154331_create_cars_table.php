<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
            $table->increments('id');

            $table->integer('mark_id')->unsigned();
            $table->foreign('mark_id')->references('id')->on('car_marks');

            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('car_models');

            $table->integer('options_id')->unsigned();
            $table->foreign('options_id')->references('id')->on('car_options');

            $table->text('description')->nullable();
            $table->boolean('enable')->default(true);
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
		Schema::drop('cars');
	}

}
