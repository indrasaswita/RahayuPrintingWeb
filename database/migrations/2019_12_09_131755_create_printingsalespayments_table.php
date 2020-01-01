<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingsalespaymentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE printingsalespayments(
				id INT PRIMARY KEY AUTO_INCREMENT,
				printingsalesID INT UNSIGNED NOT NULL,
				ammount INT NOT NULL,
				ammount2 INT NOT NULL,
				description VARCHAR(64) NOT NULL,
				method VARCHAR(32) NOT NULL,
				checked VARCHAR(64) NOT NULL,
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
		Schema::dropIfExists('printingsalespayments');
	}
}
