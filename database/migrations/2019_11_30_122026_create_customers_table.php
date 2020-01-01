<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE customers(
				id INT PRIMARY KEY AUTO_INCREMENT,
				customertypeID INT UNSIGNED NOT NULL,
				companyID INT UNSIGNED NULL,
				addressID INT UNSIGNED NULL,
				name VARCHAR(64) NOT NULL,
				phone VARCHAR(32) NOT NULL DEFAULT '',
				phone2 VARCHAR(32) NOT NULL DEFAULT '',
				phone3 VARCHAR(32) NOT NULL DEFAULT '',
				email VARCHAR(32) NOT NULL,
				cardnumber VARCHAR(64) NULL,
				cardpassword VARCHAR(16) NULL,
				cardUID VARCHAR(16) NULL,
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
		Schema::dropIfExists('customers');
	}
}
