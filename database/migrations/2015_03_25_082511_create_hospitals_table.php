<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('district_id');
			$table->integer('hospital_category_id');
			$table->string('name');
			$table->string('type');
			$table->string('photo1');
			$table->string('photo2');
			$table->string('photo3');
			$table->text('description');
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
		Schema::drop('hospitals');
	}

}
