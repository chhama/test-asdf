<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('loan_head_id');
			$table->integer('staff_id');
			$table->string('amount');
			$table->string('emi');
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
		Schema::drop('loans');
	}

}
