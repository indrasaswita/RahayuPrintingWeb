<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE companies(
				id INT PRIMARY KEY AUTO_INCREMENT,
				parentcompanyID INT UNSIGNED NULL,
				addressID INT UNSIGNED NULL,
				name VARCHAR(64) NOT NULL,
				alias VARCHAR(32) NOT NULL,
				phone VARCHAR(32) NOT NULL DEFAULT '',
				phone2 VARCHAR(32) NOT NULL DEFAULT '',
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
		Schema::dropIfExists('companies');
	}
}
