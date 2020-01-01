<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedPrintingtimerheadersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO `printingtimerheaders` (`printingsalesID`, `customerID`, `employeeID`, `keterangan`, `status`) VALUES
				(null, null, 7, '', 1),
				(null, null, 7, '', 1),
				(null, null, 1, '', 1),
				(null, null, 5, '', 1),
				(null, null, 7, '', 1),
				(null, null, 5, '', 1),
				(null, null, 7, '', 1),
				(null, null, 7, '', 1),
				(null, null, 7, '', 1),
				(null, null, 7, '', 1);
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
