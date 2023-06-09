<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatatabelQuality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('datatable_quality', function (Blueprint $table) {
            $table->id();
            // $table->date('tanggal');
            $table->integer('no_mesin');
            $table->string('nama_part');
            $table->string('problem');
            $table->string('aktivitas');
            // $table->time('jam');
            $table->string('status');
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
