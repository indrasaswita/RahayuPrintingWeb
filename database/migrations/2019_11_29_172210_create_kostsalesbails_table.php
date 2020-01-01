<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostsalesbailsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//JAMINAN KOST
		DB::unprepared("
			CREATE TABLE kostsalesbails(
				id INT PRIMARY KEY AUTO_INCREMENT,
				customerID INT UNSIGNED NOT NULL,
				employeeID INT UNSIGNED NOT NULL,
				ammount INT UNSIGNED NOT NULL,
				waktumasuk DATE NOT NULL,
				waktukeluar DATE NULL,
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
		Schema::dropIfExists('kostsalesbails');
	}
}
