<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedKostsalesheadersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(1, 1, '2019-10-14', '2019-11-13', 800000, 0, now(), '2019-10-11 15:00:02');
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(2, 2, '2019-10-13', '2019-11-12', 800000, 0, now(), '2019-10-12 16:30:02');
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(3, 1, '2019-11-14', '2019-12-13', 800000, 0, null, '2019-10-13 15:00:02');
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(4, 4, '2019-10-26', '2019-11-25', 800000, 0, null, '2019-10-14 06:30:02');
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(5, 6, '2019-11-14', '2019-12-13', 800000, 0, now(), '2019-10-15 15:00:02');
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(6, 8, '2019-12-13', '2020-1-12', 800000, 0, now(), '2019-10-12 14:30:02');
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(7, 10, '2019-12-1', '2019-12-31', 800000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(8, 46, '2019-12-12', '2020-1-11', 800000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(9, 11, '2019-11-14', '2019-12-13', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(10, 11, '2019-12-13', '2020-1-12', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(11, 47, '2019-12-1', '2019-12-31', 800000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(12, 17, '2019-12-12', '2020-1-11', 800000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(13, 20, '2019-10-14', '2019-11-13', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(14, 16, '2019-10-13', '2019-11-12', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(15, 22, '2019-11-14', '2019-12-13', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(16, 16, '2019-10-26', '2019-11-25', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(17, 27, '2019-11-14', '2019-12-13', 600000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(18, 18, '2019-12-13', '2020-1-12', 600000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(19, 32, '2019-12-1', '2019-12-31', 600000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(20, 30, '2019-12-12', '2020-1-11', 600000, 0, null, now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(21, 25, '2019-11-14', '2019-12-13', 600000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(22, 27, '2019-12-13', '2020-1-12', 600000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(23, 28, '2019-12-1', '2019-12-31', 600000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(24, 20, '2019-12-12', '2020-1-11', 600000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(25, 21, '2019-10-14', '2019-11-13', 600000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(26, 29, '2019-10-13', '2019-11-12', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(27, 28, '2019-11-14', '2019-12-13', 800000, 0, now(), now());
			INSERT INTO kostsalesheaders (id, roomID, starttime, endtime, baseprice, discount, paid_at, created_at) VALUES(28, 17, '2019-10-26', '2019-11-25', 800000, 0, now(), now());




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
