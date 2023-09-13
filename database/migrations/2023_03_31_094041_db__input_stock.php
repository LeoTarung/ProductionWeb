<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbInputStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_InputStock', function (Blueprint $table) {
            $table->id('No');
            $table->date('tanggal');
            $table->integer('berat');
            $table->char('initial_material');
            $table->char('kode_material');
            $table->integer('nrp');
            $table->char('nama_penimbang');
            $table->integer('kode');
            $table->char('nama_vendor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_InputStock');
    }
}
