<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LhpSupplyRaw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_supply_raw', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lhp');
            $table->foreign('id_lhp')->references('id')->on('lhp_supply')->onDelete('cascade');
            $table->time('jam');
            $table->integer('no_mc');
            $table->foreign('no_mc')->references('mc')->on('mesin_casting')->onDelete('cascade');
            $table->string('furnace');
            $table->integer('jumlah_tapping');
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
