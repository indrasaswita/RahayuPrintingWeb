<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedPrintingtimestampsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			INSERT INTO printingtimestamps (id, stamptime, employeeID, description) VALUES
				(1, '2015-12-01 16:57:46', 1, 'CLOSING HARIAN'),
				(2, '2015-12-04 16:58:18', 1, 'CLOSING HARIAN'),
				(3, '2015-12-05 15:09:46', 1, 'CLOSING HARIAN'),
				(4, '2015-12-15 20:50:43', 1, 'CLOSING HARIAN'),
				(5, '2016-01-08 11:13:13', 1, 'CLOSING HARIAN'),
				(6, '2016-01-12 10:33:30', 4, 'CLOSING HARIAN'),
				(7, '2016-01-14 11:55:37', 4, 'CLOSING HARIAN'),
				(8, '2016-01-18 11:47:13', 4, 'CLOSING HARIAN'),
				(9, '2016-01-18 13:37:18', 4, 'CLOSING HARIAN'),
				(10, '2016-01-25 13:52:09', 4, 'CLOSING HARIAN'),
				(11, '2016-01-29 10:27:31', 4, 'CLOSING HARIAN'),
				(12, '2016-02-10 10:58:13', 4, 'CLOSING HARIAN'),
				(13, '2016-02-17 10:25:29', 4, 'CLOSING HARIAN'),
				(14, '2016-02-29 10:39:57', 4, 'CLOSING HARIAN'),
				(15, '2016-03-07 11:43:56', 4, 'CLOSING HARIAN'),
				(16, '2016-03-08 09:35:30', 14, 'CLOSING HARIAN'),
				(17, '2016-03-16 13:58:37', 4, 'CLOSING HARIAN'),
				(18, '2016-03-22 09:36:34', 4, 'CLOSING HARIAN'),
				(19, '2016-03-29 09:36:46', 4, 'CLOSING HARIAN'),
				(20, '2016-04-02 10:45:03', 4, 'CLOSING HARIAN'),
				(21, '2016-04-08 12:50:46', 6, 'CLOSING HARIAN'),
				(22, '2016-04-12 11:22:48', 4, 'CLOSING HARIAN'),
				(23, '2016-04-18 09:18:19', 4, 'CLOSING HARIAN'),
				(24, '2016-04-19 16:09:16', 6, 'CLOSING HARIAN'),
				(25, '2016-04-22 10:51:00', 4, 'CLOSING HARIAN'),
				(26, '2016-04-26 15:34:19', 6, 'CLOSING HARIAN'),
				(27, '2016-04-28 10:07:25', 4, 'CLOSING HARIAN'),
				(28, '2016-04-29 13:08:25', 4, 'CLOSING HARIAN'),
				(29, '2016-05-04 09:01:55', 4, 'CLOSING HARIAN'),
				(30, '2016-05-09 17:06:33', 14, 'CLOSING HARIAN'),
				(31, '2016-05-11 15:50:36', 4, 'CLOSING HARIAN'),
				(32, '2016-05-13 15:39:20', 4, 'CLOSING HARIAN'),
				(33, '2016-05-17 15:22:16', 4, 'CLOSING HARIAN'),
				(34, '2016-05-18 16:36:02', 4, 'CLOSING HARIAN'),
				(35, '2016-05-20 11:00:38', 4, 'CLOSING HARIAN'),
				(36, '2016-05-24 10:14:42', 4, 'CLOSING HARIAN'),
				(37, '2016-05-27 19:48:23', 4, 'CLOSING HARIAN'),
				(38, '2016-06-03 08:51:14', 4, 'CLOSING HARIAN'),
				(39, '2016-06-11 09:18:40', 4, 'CLOSING HARIAN'),
				(40, '2016-06-21 19:27:38', 1, 'CLOSING HARIAN'),
				(41, '2016-06-23 18:03:18', 4, 'CLOSING HARIAN'),
				(42, '2016-07-01 12:01:33', 4, 'CLOSING HARIAN'),
				(43, '2016-07-02 09:44:55', 4, 'CLOSING HARIAN'),
				(44, '2016-07-16 13:37:32', 14, 'CLOSING HARIAN'),
				(45, '2016-07-27 20:37:46', 4, 'CLOSING HARIAN'),
				(46, '2016-08-01 19:16:15', 4, 'CLOSING HARIAN'),
				(47, '2016-08-03 13:20:53', 4, 'CLOSING HARIAN'),
				(48, '2016-08-09 09:07:33', 4, 'CLOSING HARIAN'),
				(49, '2016-08-20 15:54:21', 4, 'CLOSING HARIAN'),
				(50, '2016-08-31 20:16:11', 4, 'CLOSING HARIAN'),
				(51, '2016-09-07 18:13:54', 4, 'CLOSING HARIAN'),
				(52, '2016-09-19 10:46:47', 4, 'CLOSING HARIAN'),
				(53, '2016-09-19 16:20:39', 4, 'CLOSING HARIAN'),
				(54, '2016-09-26 19:37:30', 4, 'CLOSING HARIAN'),
				(55, '2016-09-26 20:32:13', 4, 'CLOSING HARIAN'),
				(56, '2016-09-26 20:47:11', 4, 'CLOSING HARIAN'),
				(57, '2016-09-27 20:24:14', 4, 'CLOSING HARIAN'),
				(58, '2016-10-07 20:20:46', 4, 'CLOSING HARIAN'),
				(59, '2016-10-07 20:38:43', 4, 'CLOSING HARIAN'),
				(60, '2016-10-07 20:38:44', 4, 'CLOSING HARIAN'),
				(61, '2016-10-07 20:43:53', 4, 'CLOSING HARIAN'),
				(62, '2016-10-20 19:49:53', 4, 'CLOSING HARIAN'),
				(63, '2016-11-07 10:05:09', 4, 'CLOSING HARIAN'),
				(64, '2016-11-07 11:25:20', 4, 'CLOSING HARIAN'),
				(65, '2016-11-11 20:40:47', 4, 'CLOSING HARIAN'),
				(66, '2016-11-11 20:56:24', 4, 'CLOSING HARIAN'),
				(67, '2016-12-01 20:42:13', 4, 'CLOSING HARIAN'),
				(68, '2016-12-01 20:47:16', 4, 'CLOSING HARIAN'),
				(69, '2016-12-17 18:19:07', 4, 'CLOSING HARIAN'),
				(70, '2016-12-17 19:35:26', 4, 'CLOSING HARIAN'),
				(71, '2017-01-10 18:33:29', 4, 'CLOSING HARIAN'),
				(72, '2017-01-10 19:30:44', 4, 'CLOSING HARIAN'),
				(73, '2017-01-10 19:39:25', 4, 'CLOSING HARIAN'),
				(74, '2017-02-27 19:18:24', 4, 'CLOSING HARIAN'),
				(75, '2017-02-27 19:34:13', 4, 'CLOSING HARIAN'),
				(76, '2017-03-24 13:26:44', 4, 'CLOSING HARIAN'),
				(77, '2017-04-05 10:38:29', 4, 'CLOSING HARIAN'),
				(78, '2017-04-05 11:03:20', 4, 'CLOSING HARIAN'),
				(79, '2017-04-05 11:04:54', 4, 'CLOSING HARIAN'),
				(80, '2017-04-05 11:06:02', 4, 'CLOSING HARIAN'),
				(81, '2017-05-04 14:39:56', 4, 'CLOSING HARIAN'),
				(82, '2017-05-04 15:28:16', 4, 'CLOSING HARIAN'),
				(83, '2017-05-04 15:30:40', 4, 'CLOSING HARIAN'),
				(84, '2017-06-06 15:53:47', 4, 'CLOSING HARIAN'),
				(85, '2017-06-06 16:11:54', 1, 'CLOSING HARIAN'),
				(86, '2017-06-06 16:13:53', 1, 'CLOSING HARIAN'),
				(87, '2017-06-16 13:43:58', 4, 'CLOSING HARIAN'),
				(88, '2017-06-16 19:01:38', 4, 'CLOSING HARIAN'),
				(89, '2017-06-16 19:10:34', 4, 'CLOSING HARIAN'),
				(90, '2017-06-22 12:38:29', 14, 'CLOSING HARIAN'),
				(91, '2017-06-22 12:44:45', 4, 'CLOSING HARIAN'),
				(92, '2017-06-22 12:48:14', 4, 'CLOSING HARIAN'),
				(93, '2017-07-14 13:24:42', 4, 'CLOSING HARIAN'),
				(94, '2017-07-14 13:25:28', 4, 'CLOSING HARIAN'),
				(95, '2017-07-14 13:33:21', 4, 'CLOSING HARIAN'),
				(96, '2017-07-14 13:38:48', 4, 'CLOSING HARIAN'),
				(97, '2017-08-23 10:32:16', 4, 'CLOSING HARIAN'),
				(98, '2017-08-23 11:26:10', 4, 'CLOSING HARIAN'),
				(99, '2017-08-23 11:38:58', 4, 'CLOSING HARIAN'),
				(100, '2017-09-09 12:33:20', 4, 'CLOSING HARIAN'),
				(101, '2017-09-09 12:54:48', 4, 'CLOSING HARIAN'),
				(102, '2017-09-09 13:06:37', 4, 'CLOSING HARIAN'),
				(103, '2017-09-09 13:09:32', 4, 'CLOSING HARIAN'),
				(104, '2017-10-02 11:23:32', 4, 'CLOSING HARIAN'),
				(105, '2017-10-02 11:37:17', 14, 'CLOSING HARIAN'),
				(106, '2017-10-16 14:40:15', 4, 'CLOSING HARIAN'),
				(107, '2017-10-16 14:44:11', 4, 'CLOSING HARIAN'),
				(108, '2017-11-15 10:22:24', 4, 'CLOSING HARIAN'),
				(109, '2017-11-15 10:53:12', 4, 'CLOSING HARIAN'),
				(110, '2017-11-15 10:56:00', 4, 'CLOSING HARIAN'),
				(111, '2017-11-29 09:42:54', 4, 'CLOSING HARIAN'),
				(112, '2017-11-29 09:55:35', 4, 'CLOSING HARIAN'),
				(113, '2017-12-19 10:17:37', 4, 'CLOSING HARIAN');
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
