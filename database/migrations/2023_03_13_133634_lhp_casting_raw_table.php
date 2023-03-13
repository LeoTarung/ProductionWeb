<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LhpCastingRawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_casting_raw', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lhp');
            $table->foreign('id_lhp')->references('id')->on('lhp_casting')->onDelete('cascade');
            $table->unsignedBigInteger('id_ng');
            $table->foreign('id_ng')->references('id')->on('reject_ng')->onDelete('cascade');
            $table->unsignedBigInteger('id_dt');
            $table->foreign('id_dt')->references('id')->on('downtime')->onDelete('cascade');
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
