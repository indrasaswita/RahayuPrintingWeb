<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedKostsalescustomersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (1, 1, 1);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (2, 2, 2);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (3, 3, 3);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (4, 4, 4);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (5, 5, 5);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (6, 6, 6);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (7, 7, 38);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (8, 7, 131);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (9, 8, 156);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (10, 8, 157);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (11, 9, 161);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (12, 9, 182);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (13, 10, 183);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (14, 10, 192);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (15, 11, 204);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (16, 12, 216);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (17, 13, 218);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (18, 14, 219);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (19, 15, 225);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (20, 16, 229);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (21, 17, 234);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (22, 18, 241);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (23, 19, 246);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (24, 20, 252);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (25, 20, 256);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (26, 21, 279);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (27, 21, 284);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (28, 22, 299);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (29, 22, 304);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (30, 23, 309);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (31, 23, 313);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (32, 24, 315);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (33, 25, 319);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (34, 26, 332);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (35, 27, 345);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (36, 28, 355);
			INSERT INTO kostsalescustomers (id, kostsalesID, customerID) VALUES (37, 28, 359);

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
