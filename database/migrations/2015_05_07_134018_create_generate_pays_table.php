<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneratePaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('generate_pays', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('approved_pay_id');
			$table->integer('designation_id');
			$table->string('hospital_type');
			$table->string('arrear');
			$table->string('wef');
			$table->date('date');
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
		Schema::drop('generate_pays');
	}

}
