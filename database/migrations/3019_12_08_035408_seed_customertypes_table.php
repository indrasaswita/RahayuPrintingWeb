<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCustomertypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO customertypes VALUES('1', 'normal', now(), null);
			INSERT INTO customertypes VALUES('2', 'broker', now(), null);
			INSERT INTO customertypes VALUES('3', 'member', now(), null);

		");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
