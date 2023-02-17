<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_metode', function (Blueprint $table) {
            $table->id('No');
            $table->string('deskripsi');
            $table->string('Problem');
            $table->string('Countermeasure')->nullable();
            $table->string('Status');
            $table->string('Plan');
            $table->string('Safety');
            $table->string('Cycle_time');
            $table->string('Job_setup');
            $table->string('Verifikasi_proses');
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodes');
    }
};
