<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingsalesdetailfinishingsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE printingsalesdetailfinishings(
				id INT PRIMARY KEY AUTO_INCREMENT,
				printingsalesdetailID INT UNSIGNED NOT NULL,
				finishingname VARCHAR(64) NOT NULL,
				finishingoption VARCHAR(64) NOT NULL,
				note VARCHAR(255) NOT NULL,
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
		Schema::dropIfExists('printingsalesdetailfinishings');
	}
}
