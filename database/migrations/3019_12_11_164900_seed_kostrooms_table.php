<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedKostroomsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (1, 201, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (2, 202, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (3, 203, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (4, 204, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (5, 205, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (6, 206, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (7, 207, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (8, 208, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (9, 209, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (10, 210, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (11, 211, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (12, 212, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (13, 213, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (14, 214, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (15, 215, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (16, 216, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (17, 301, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (18, 302, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (19, 303, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (20, 304, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (21, 305, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (22, 306, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (23, 307, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (24, 308, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (25, 309, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (26, 310, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (27, 311, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (28, 312, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (29, 313, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (30, 314, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (31, 315, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (32, 316, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (33, 501, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (34, 502, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (35, 503, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (36, 504, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (37, 505, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (38, 506, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (39, 507, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (40, 508, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (41, 509, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (42, 510, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (43, 511, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (44, 512, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (45, 513, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (46, 514, 2, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (47, 601, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (48, 602, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (49, 603, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (50, 604, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (51, 605, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (52, 606, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (53, 607, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (54, 608, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (55, 609, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (56, 610, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (57, 611, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (58, 612, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (59, 613, 3, 0, 800000, 1040000, null);
			INSERT INTO kostrooms (id, roomnumber, floornumber, acsupplied, price, pricefortwo, tokennumber) VALUES (60, 614, 3, 0, 800000, 1040000, null);

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
