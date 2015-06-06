<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_models', function(Blueprint $table)
		{
            $table->increments('id');

            $table->integer('car_mark_id')->unsigned();
            $table->foreign('car_mark_id')->references('id')->on('car_marks')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->timestamps();

            $table->unique(['id', 'slug']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('car_models');
	}

}
