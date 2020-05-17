<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddABCDColumnsToStraffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('straffs', function (Blueprint $table) {
            $table->string('Name')->nullable();
            $table->integer('Age')->nullable();
            $table->integer('Salary')->nullable();
            $table->string('Phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('straffs', function (Blueprint $table) {
            //
        });
    }
}
