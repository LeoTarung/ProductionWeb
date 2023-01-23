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
            $table->unsignedBiginteger('id_mc');
            $table->foreign('id_mc')->references('id')->on('mesin_casting')->onDelete('cascade');
            $table->string('furnace');
            $table->string('berat');
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
