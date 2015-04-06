<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('staff_id');
			$table->integer('designation_id');
			$table->integer('district_id');
			$table->integer('hospital_category_id');
			$table->integer('hospital_id');
			$table->string('status',20);
			$table->string('total_remuneration');
			$table->date('doj');
			$table->string('type');
			$table->text('remark');
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
		Schema::drop('postings');
	}

}
