<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedPrintingsalesdetailfinishingsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (70, 'Jilid Lem Panas', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (70, 'Numerator', 'no awal 000001', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (231, 'Laminating', 'DOFF 1 SISI', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (231, 'Tempel', 'STIKER 3M', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (232, 'Jilid Ring', 'spiral wrna hitam', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (293, 'Lipat', 'lipat 2', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (341, 'Lipat', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (342, 'Lipat', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (355, 'Jilid Lem Panas', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (356, 'Jilid Lem Panas', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (384, 'Jilid Staples', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (384, 'Laminating', 'cover lam doff 1 sisi', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (428, 'Laminating', 'GLOSSY', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (478, 'Laminating', 'doff', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (484, 'Lipat', 'lipet 2', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (494, 'Laminating', '2 LEMBAR AJA YANG LAMINATING', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (511, 'Jilid Staples', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (511, 'Laminating', 'cover glossy 1 sisi', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (512, 'Jilid Staples', '', '');
			INSERT INTO printingsalesdetailfinishings (printingsalesdetailID, finishingname, finishingoption, note) VALUES (512, 'Laminating', 'cover lam doff 1 sisi', '');

		");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
