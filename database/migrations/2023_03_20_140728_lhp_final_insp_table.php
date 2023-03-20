<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LhpFinalInspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_final_insp', function (Blueprint $table) {
            $table->id();
            $table->integer('nrp1')->default('0')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('shift')->default('0');
            $table->string('nama_part')->default('0');
            $table->integer('total_produksi')->default('0');
            $table->integer('total_ok')->default('0');
            $table->integer('total_ng')->default('0');
            $table->time('total_downtime')->default('0');
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
