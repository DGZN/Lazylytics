<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('traces', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->integer('trace_group_id')->nullable();
			$table->string('name');
			$table->string('baseURL');
			$table->string('resource');
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
		Schema::drop('traces');
	}

}
