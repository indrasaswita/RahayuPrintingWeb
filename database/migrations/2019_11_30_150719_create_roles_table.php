<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE roles(
				id INT PRIMARY KEY AUTO_INCREMENT,
				name VARCHAR(32) NOT NULL,
				level TINYINT NOT NULL,
				customeradmin TINYINT NOT NULL DEFAULT 0,
				customernormal TINYINT NOT NULL DEFAULT 0,
				employeeadmin TINYINT NOT NULL DEFAULT 0,
				employeenormal TINYINT NOT NULL DEFAULT 0,
				changerole TINYINT NOT NULL DEFAULT 0,
				pvcitemadmin TINYINT NOT NULL DEFAULT 0,
				pvcitemnormal TINYINT NOT NULL DEFAULT 0,
				pvcsalesadmin TINYINT NOT NULL DEFAULT 0,
				pvcsalesnormal TINYINT NOT NULL DEFAULT 0,
				pvcpurchaseadmin TINYINT NOT NULL DEFAULT 0,
				pvcpurchasenormal TINYINT NOT NULL DEFAULT 0,
				pvctransferadmin TINYINT NOT NULL DEFAULT 0,
				pvctransfernormal TINYINT NOT NULL DEFAULT 0,
				pvcreportadmin TINYINT NOT NULL DEFAULT 0,
				pvcreportnormal TINYINT NOT NULL DEFAULT 0,
				printingsalesadmin TINYINT NOT NULL DEFAULT 0,
				printingsalesnormal TINYINT NOT NULL DEFAULT 0,
				printingpurchaseadmin TINYINT NOT NULL DEFAULT 0,
				printingpurchasenormal TINYINT NOT NULL DEFAULT 0,
				printingreportadmin TINYINT NOT NULL DEFAULT 0,
				printingreportnormal TINYINT NOT NULL DEFAULT 0,
				printingfileadmin TINYINT NOT NULL DEFAULT 0,
				printingfilenormal TINYINT NOT NULL DEFAULT 0,
				printingsalescloneadmin TINYINT NOT NULL DEFAULT 0,
				printingsalesclonenormal TINYINT NOT NULL DEFAULT 0,
				kostsalesadmin TINYINT NOT NULL DEFAULT 0,
				kostsalesnormal TINYINT NOT NULL DEFAULT 0,
				kostpurchaseadmin TINYINT NOT NULL DEFAULT 0,
				kostpurchasenomrla TINYINT NOT NULL DEFAULT 0,
				kostreportadmin TINYINT NOT NULL DEFAULT 0,
				kostreportnormal TINYINT NOT NULL DEFAULT 0,
				stationerysalesadmin TINYINT NOT NULL DEFAULT 0,
				stationerysalesnormal TINYINT NOT NULL DEFAULT 0,
				stationerypurchaseadmin TINYINT NOT NULL DEFAULT 0,
				stationerypurchasenormal TINYINT NOT NULL DEFAULT 0,
				stationeryreportadmin TINYINT NOT NULL DEFAULT 0,
				stationeryreportnormal TINYINT NOT NULL DEFAULT 0,
				stationeryitemadmin TINYINT NOT NULL DEFAULT 0,
				stationeryitemnormal TINYINT NOT NULL DEFAULT 0,
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
		Schema::dropIfExists('roles');
	}
}
