<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingtimerheadersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE printingtimerheaders(
				id INT PRIMARY KEY AUTO_INCREMENT,
				printingsalesID INT UNSIGNED NULL,
				customerID INT UNSIGNED NULL,
				employeeID INT UNSIGNED NULL,
				keterangan VARCHAR(32) NULL,
				status TINYINT NOT NULL DEFAULT 1,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP NULL
			);
		");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('printingtimerheaders');
	}
}
