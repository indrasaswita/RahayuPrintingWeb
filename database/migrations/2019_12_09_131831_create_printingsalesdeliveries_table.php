<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingsalesdeliveriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE printingsalesdeliveries(
				id INT PRIMARY KEY AUTO_INCREMENT,
				printingsalesID INT UNSIGNED NOT NULL,
				courierID INT UNSIGNED NOT NULL,
				quantity INT UNSIGNED NOT NULL,
				description VARCHAR(255) NOT NULL,
				receiver VARCHAR(64) NOT NULL,
				address VARCHAR(255) NULL,
				deliveryvia VARCHAR(64) NOT NULL DEFAULT '',
				deliveryprice INT UNSIGNED NOT NULL DEFAULT 0,
				deliverynumber VARCHAR(64) NOT NULL DEFAULT '',
				tandaterima VARCHAR(255) NOT NULL DEFAULT '',
				deliveryreceipt VARCHAR(255) NOT NULL DEFAULT '',
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
		Schema::dropIfExists('printingsalesdeliveries');
	}
}
