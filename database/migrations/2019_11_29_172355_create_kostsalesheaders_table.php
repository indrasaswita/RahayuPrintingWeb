<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostsalesheadersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE kostsalesheaders(
				id INT PRIMARY KEY AUTO_INCREMENT,
				roomID INT UNSIGNED NOT NULL,
				starttime DATE NOT NULL,
				endtime DATE NOT NULL,
				baseprice INT UNSIGNED NOT NULL,
				discount INT UNSIGNED NOT NULL,
				paid_at DATETIME NULL,
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
		Schema::dropIfExists('kostsalesheaders');
	}
}
