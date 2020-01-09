<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedEmployeesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO employees VALUES ('1', '1', 'Theoooooo', 'theo', '".Hash::make('theo')."', '081315519889', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('2', '2', 'Widya Saswita', 'widya', '', '082113889889', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('3', '2', 'Yuni Saswita', 'lingling', '', '081808031889', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('4', '2', 'Chandra Togel', 'togel', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('5', '6', 'Irfan Boing', 'boing', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('6', '9', 'Udin Putih', 'udin', '', '082252532211', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('7', '10', 'Udin Item', 'ireng', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('8', '8', 'Udin Kecil', 'ucil', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('9', '8', 'Diki', 'diki', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('10', '9', 'Piski Tunggala', 'piski', '', '082252532244', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('11', '8', 'Beni Irawan', 'beni', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('12', '8', 'Widiardiansyah', 'ansa', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('13', '7', 'Widiardyawan', 'awan', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('14', '7', 'Darmono', 'mocil', '', '085282962322', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('15', '2', 'Lie Ay Hoa', 'mama', '', '', null, null, null, null, now(), null);
			INSERT INTO employees VALUES ('16', '6', 'Rudi Sukradi', 'rudi', '', '', null, null, null, null, now(), null);

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
