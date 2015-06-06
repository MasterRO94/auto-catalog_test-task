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

            /*$table->integer('car_mark_id')->unsigned();
            $table->foreign('car_mark_id')->references('id')->on('car_marks');

            $table->integer('car_model_id')->unsigned();
            $table->foreign('car_model_id')->references('id')->on('car_models');*/

            $table->integer('car_options_id')->unsigned();
            $table->foreign('car_options_id')->references('id')->on('car_options');

            $table->string('image')->default('no_image.png');
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
