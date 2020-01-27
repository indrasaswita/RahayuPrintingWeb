<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCompaniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO companies VALUES ('1', null, '1', 'Krusty Crab Restaurant Co., Ltd.', 'Krusty Crab', '0216445787', '0216521244', now(), null);
			INSERT INTO companies VALUES ('2', null, '1', '', 'Chum Bucket', '0216521223', '', now(), null);
			INSERT INTO companies VALUES ('3', null, null, 'Space Ship', '', '021021021', '', now(), null);
			INSERT INTO companies VALUES ('4', '1', '1', 'Sponge Coral', 'Sponge Coral', '0215544887', '', now(), null);
			INSERT INTO companies VALUES ('5', '1', '1', 'Patrick Coral', 'Patrick Coral', '021123456', '', now(), null);
			INSERT INTO companies VALUES ('6', '1', '1', 'Jellyfish Hunt Club', 'Jellyfish Hunt Club', '0216548745', '', now(), null);
			INSERT INTO companies VALUES ('7', '1', '2', 'Authorized Company', 'Auth.co', '02121124', '', now(), null);

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
