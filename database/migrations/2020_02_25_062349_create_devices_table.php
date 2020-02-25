<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('install');
            $table->string('system');
            $table->string('m_capacity');
            $table->string('m_manufacturer');
            $table->string('m_model');
            $table->string('m_azimuth');
            $table->string('m_tilt');
            $table->string('m_serial');
            $table->string('m_parallel');
            $table->string('m_step');
            $table->string('m_totalcapacity');
            $table->string('i_capacity');
            $table->string('i_manufacturer');
            $table->string('i_model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
