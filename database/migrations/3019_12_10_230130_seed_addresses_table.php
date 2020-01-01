<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedAddressesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(1, 12, 'Kantor', 'Gang Melawan', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(2, 12, 'Kantor', 'Komplek Puri Mutiara Blok A No. 62, Jl. Griya Utama, Sunter Agung, Jakarta Utara 14350', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(3, 12, 'Kantor', 'Jl. Panglima Polim , Jakarta Selatan', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(4, 12, 'Kantor', 'Gedung, BeritaSatuPlaza Lt.5, Jl. Jendral Gatot Subroto Kav 35-36, Kuningan Timur, Setiabudi, Jakarta Selatan, 12950', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(5, 12, 'Kantor', 'Rukan Palazzo Blok B 17,Kemayoran, Jakarta Pusat', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(6, 12, 'Kantor', 'Komplek Perkantoran Kota Grogol Permai Blok B - 45, Jl. Prof.Dr.Latumeten, Jakarta Barat Jl. Prof.Dr.Latumeten\r\nJakarta Barat', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(7, 12, 'Kantor', 'Jl. Pangeran Jayakarta Komp. 66, Blok B3', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(8, 12, 'Kantor', 'Jl. Pacuan kuda raya no. 27 pulomas jak.tim', '');
			INSERT INTO addresses (id, cityID, name, address, addressnotes) VALUES(9, 12, 'Kantor', 'jln.haji r.rasuna said kav. B12 karet,setia budi', '');

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
