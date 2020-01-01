<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashflowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE TABLE cashflows(
                id INT PRIMARY KEY AUTO_INCREMENT,
                typeID INT UNSIGNED NOT NULL,
                divisionID INT UNSIGNED NULL,
                employeeID INT UNSIGNED NOT NULL,
                supervisorID INT UNSIGNED NULL,
                purpose VARCHAR(63) NOT NULL,
                description VARCHAR(255) NOT NULL,
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
        Schema::dropIfExists('cashflows');
    }
}
