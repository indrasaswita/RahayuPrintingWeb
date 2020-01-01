<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingsalesheadersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE printingsalesheaders(
				id INT PRIMARY KEY AUTO_INCREMENT,
				customerID INT UNSIGNED NULL,
				ponumber VARCHAR(32) NOT NULL,
				deliverynote VARCHAR(255) NOT NULL,
				tempo DATE NOT NULL DEFAULT '1900-01-01',
				status VARCHAR(32) NOT NULL,
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
		Schema::dropIfExists('printingsalesheaders');
	}
}
