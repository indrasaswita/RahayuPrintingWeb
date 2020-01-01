<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingsalesdetailsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE printingsalesdetails(
				id INT PRIMARY KEY AUTO_INCREMENT,
				printingsalesID INT UNSIGNED NOT NULL,
				printingtypeID INT UNSIGNED NOT NULL,
				printingtitle VARCHAR(128) NOT NULL,
				jobtype VARCHAR(8) NOT NULL,
				previewfile VARCHAR(512) NOT NULL,
				quantity INT UNSIGNED NOT NULL,
				quantitytypename VARCHAR(32) NOT NULL,
				inschiet INT UNSIGNED NOT NULL,
				inschiettypename VARCHAR(32) NOT NULL,
				material VARCHAR(255) NOT NULL,
				papersize VARCHAR(32) NOT NULL,
				printsize VARCHAR(32) NOT NULL,
				imagesize VARCHAR(32) NOT NULL,
				sideprint VARCHAR(32) NOT NULL,
				totalplat INT UNSIGNED NOT NULL,
				description VARCHAR(1024) NOT NULL,
				note VARCHAR(255) NOT NULL,
				hargaasli INT UNSIGNED NOT NULL,
				hargamaterial INT UNSIGNED NOT NULL,
				hargaongkoscetak INT UNSIGNED NOT NULL,
				deadline DATETIME NOT NULL,
				printapproval TINYINT NOT NULL DEFAULT 0,
				printapprovalimage VARCHAR(512) NULL,
				printapprovalsigner VARCHAR(32) NULL,
				printingstatusID INT UNSIGNED NOT NULL DEFAULT 1,
				digitalcounter INT UNSIGNED NOT NULL DEFAULT 0,
				offsetcounter INT UNSIGNED NOT NULL DEFAULT 0,
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
		Schema::dropIfExists('printingsalesdetails');
	}
}
