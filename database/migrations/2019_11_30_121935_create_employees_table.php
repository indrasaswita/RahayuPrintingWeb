<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE employees(
				id INT PRIMARY KEY AUTO_INCREMENT,
				roleID INT UNSIGNED NOT NULL,
				name VARCHAR(64) NOT NULL,
				username VARCHAR(64) NOT NULL,
				password VARCHAR(64) NOT NULL,
				phone VARCHAR(32) NOT NULL,
				cardnumber VARCHAR(64) NULL,
				cardUID varchar(16) NULL,
				app_token VARCHAR(100) NULL,
				remember_token VARCHAR(100) NULL,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP NULL,
				UNIQUE (name)
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
		Schema::dropIfExists('employees');
	}
}
