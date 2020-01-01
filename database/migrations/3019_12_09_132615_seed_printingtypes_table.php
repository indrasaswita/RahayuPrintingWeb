<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedPrintingtypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Epson Ink', 'epsonkertas')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Foto Epson', 'epsonfoto')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Large Format', 'spanduk')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Stand Banner', 'banner')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Offset Print', 'offset')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Digital A3+', 'a3')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Digital A2', 'a2')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Digital A1', 'a1')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Stempel Runaflek', 'stempel')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Ongkos Cetak', 'ongkoscetak')");
		DB::unprepared("INSERT INTO printingtypes (name, alias) VALUES ('Nota NCR', 'ncr')");
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
