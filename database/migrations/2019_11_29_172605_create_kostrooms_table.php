<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostroomsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE kostrooms(
				id INT PRIMARY KEY AUTO_INCREMENT,
				roomnumber VARCHAR(8) NOT NULL,
				floornumber TINYINT NOT NULL,
				acsupplied TINYINT NOT NULL,
				price INT NOT NULL,
				pricefortwo INT NOT NULL,
				tokennumber VARCHAR(64) NULL,
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
		Schema::dropIfExists('kostrooms');
	}
}
