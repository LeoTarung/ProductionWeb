<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LhpForkliftRaw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_forklift_raw', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lhp');
            $table->foreign('id_lhp')->references('id')->on('pre_forklift')->onDelete('cascade');
            $table->string('jam_kerja');
            $table->integer('no_mc');
            $table->foreign('no_mc')->references('mc')->on('level_molten')->onDelete('cascade');
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
