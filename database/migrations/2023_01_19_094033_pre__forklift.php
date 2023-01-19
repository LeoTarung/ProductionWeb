<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PreForklift extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_forklift', function (Blueprint $table) {
            $table->id();
            $table->integer('forklift');
            $table->integer('nrp');
            $table->string('nama');
            $table->date('tanggal');
            $table->string('shift');
            $table->string('jam_kerja');
            $table->string('material');
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
