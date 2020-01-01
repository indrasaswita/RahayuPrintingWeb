<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedParentcompaniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO parentcompanies (id, name, alias) VALUES(1, 'Bikini Bottom Group', 'Bibo');
			INSERT INTO parentcompanies (id, name, alias) VALUES(2, 'Rock Bottom Group', 'Robo');
			INSERT INTO parentcompanies (id, name, alias) VALUES(11, 'Sanghyang Spa and Resort', '');
			INSERT INTO parentcompanies (id, name, alias) VALUES(13, 'Weddingku Group', '');
			INSERT INTO parentcompanies (id, name, alias) VALUES(14, 'KIA Tour & Travel', '');
			INSERT INTO parentcompanies (id, name, alias) VALUES(18, 'FIRST MEDIA', '');
			INSERT INTO parentcompanies (id, name, alias) VALUES(19, 'Citibank', '');
			INSERT INTO parentcompanies (id, name, alias) VALUES(22, 'No ParentCompany', 'Concordia');
			INSERT INTO parentcompanies (id, name, alias) VALUES(24, 'Baros', '');
			INSERT INTO parentcompanies (id, name, alias) VALUES(25, 'RITEL INDONESIA', '');

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
