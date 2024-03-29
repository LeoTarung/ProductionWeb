<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LhpSupply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_supply', function (Blueprint $table) {
            $table->id();
            $table->string('forklift');
            $table->integer('nrp');
            $table->string('nama');
            $table->date('tanggal');
            $table->string('shift');
            $table->string('jam_kerja');
            $table->string('material');
            // $table->integer('berat_awal');
            $table->integer('temperature')->nullable();
            $table->integer('tujuan_tapping')->nullable();
            $table->integer('jumlah_tapping')->nullable();
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
        //
    }
}
