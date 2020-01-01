<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCustomersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO customers VALUES('1', '1', null, null, 'Sandy Tupai', '081311223344', '', '', 'sandytupai@gmail.com', null, null, null, now(), null);
			INSERT INTO customers VALUES('2', '2', '2', null, 'Plankton', '081311223341', '', '', 'planton@gmail.com', null, null, null, now(), null);
			INSERT INTO customers VALUES('3', '2', '1', null, 'Mr. Crab', '081311223342', '', '', 'mrcrab@gmail.com', null, null, null, now(), null);
			INSERT INTO customers VALUES('4', '3', null, '1', 'Patrick Star', '081311223348', '', '', 'patrickstar@gmail.com', null, null, null, now(), null);
			INSERT INTO customers VALUES('5', '3', '1', '1', 'Spongebob Squarepant', '081311223345', '', '', 'spongebob@gmail.com', null, null, null, now(), null);
			INSERT INTO customers VALUES('6', '1', '1', '1', 'Squidward Tentacle', '081311223347', '', '', 'squidward@gmail.com', null, null, null, now(), null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (38, 1, 1, null, 'CASH', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (131, 1, 20, null, 'Stephanie', '0821 1065 9798', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (156, 1, 29, null, 'Imelda Triwijaya', '0812 1996 633', '', '', 'imelda.triwijaya@weddingku.com', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (157, 1, 1, null, 'Brando Law', '0878 8554 7551', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (161, 1, 33, null, 'Salman', '0857 7086 0160', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (182, 1, 49, null, 'Fany', '0818 0785 7414', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (183, 1, 49, null, 'Surya', '0815 9710 162', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (192, 1, 56, null, 'Bintang', '085779070608', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (204, 1, 1, null, 'GLEEN', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (216, 1, 49, null, 'Hanggaritsa', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (218, 1, 47, null, 'ibu kani ', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (219, 1, 1, null, 'Satria', '0888 8307 703', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (225, 1, 31, null, 'Riska', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (229, 1, 1, null, 'ACC Furniture', '021 93586917', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (234, 1, 31, null, 'Adji', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (241, 1, 64, null, 'Maria', '0818 0784 2727', '', '', 'maria.superpoly@yahoo.com', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (246, 1, 74, null, 'Lisna', '0815 8806 600', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (252, 1, 32, null, 'Rudolf', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (256, 1, 1, null, 'SIUNG GRAHA', '0816 1381 778', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (279, 1, 83, null, 'Dedah', '0813 2250 5685', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (284, 1, 29, null, 'Yuanne', '021 650 5350', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (299, 1, 49, null, 'Jehan Arifa', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (304, 1, 1, null, 'YULIANTO', '0888 900 5363', '021-6230 4339-40', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (309, 1, 90, null, 'Arman', '0818 0757 7168', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (313, 1, 93, null, 'Wahyu Baros', '0816 889 332', '', '', 'wahyubaros@gmail.com', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (315, 1, 31, null, 'Hani', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (319, 1, 32, null, 'TOMMY', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (332, 1, 1, null, 'Andi ', '0819 3146 1288', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (345, 1, 1, null, 'PENTA', '0877 8205 3977', '600 7550', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (355, 1, 104, null, 'PETER', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (359, 1, 52, null, 'Tetty', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (404, 1, 65, null, 'Soleh', '0813 1116 2627', '', '', 'Solemaid@yahoo.com', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (427, 1, 51, null, 'Evrin', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (453, 1, 1, null, 'FRENGKY', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (473, 1, 1, null, 'CHATERINE', '0815 8303 579', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (481, 1, 134, null, 'Ariyadi', '021 623 000 88 ext 2014', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (488, 1, 29, null, 'Shary', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (495, 1, 1, null, 'hary', '0811 870 771', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (501, 1, 156, null, 'Hendry', '0852 1495 9727', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (506, 1, 158, null, 'Beno', '0812 9780 0068', '', '', 'bensades@yahoo.co.id', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (518, 1, 32, null, 'riska', '0813 1458 5575', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (536, 1, 1, null, 'MARGIE', '0878 7085 1985', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (552, 1, 143, null, 'Totok', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (570, 1, 175, null, 'Megayanti Tjong', '0815 1012 7253', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (585, 1, 143, null, 'Bahagia', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (587, 1, 179, null, 'Rizki Fatimala', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (646, 1, 198, null, 'Yenny', '021-600 8474', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (654, 1, 201, null, 'ibu Nata', '0852 1891 0009', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (667, 1, 1, null, 'Melisa', '0878 8045 5404', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (673, 1, 104, null, 'fajar', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (681, 1, 68, null, 'desi', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (684, 1, 1, null, 'Century21 Mediterania Goup', '021-6698000', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (685, 1, 1, null, 'FALENTINA', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (686, 1, 68, null, 'Salbiah', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (687, 1, 1, null, 'BCA Pangjay', '0812 8261 3820', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (688, 1, 1, null, 'TJEFUK', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (689, 1, 186, null, 'RANI', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (690, 1, 206, null, 'Susan', '0811 877 1019', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (691, 1, 98, null, 'MARIA', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (692, 1, 1, null, 'SESIL', '0815 8979 979', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (693, 1, 207, null, 'dwi', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (694, 1, 197, null, 'agustin', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (695, 1, 1, null, 'wilson', '6392071', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (697, 1, 47, null, 'JIHAN', '081511958871', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (699, 1, 208, null, 'Wilson', '0812 9796 2221', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (700, 1, 1, null, 'Mega', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (702, 1, 1, null, 'PT.YUKTRAVEL INDONESIA', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (721, 1, 33, null, 'WILLY', '', '', '', '', null, null, null);
			INSERT INTO customers (id, customertypeID, companyID, addressID, name, phone, phone2, phone3, email, cardnumber, cardpassword, cardUID) VALUES (778, 1, 143, null, 'IBU PUTI', '081932021636', '', '', '', null, null, null);

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
