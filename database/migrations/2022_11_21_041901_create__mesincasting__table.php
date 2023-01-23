<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesincastingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesin_casting', function (Blueprint $table) {
            $table->id();
            $table->integer('mc')->unique();
            $table->string('material');
            $table->integer('capacity')->default('0');
            $table->integer('min')->default('0');
            $table->integer('max')->default('0');
            $table->integer('nama_part')->default('0');
            $table->integer('kode_kanban')->default('0');
            $table->integer('kode_henkaten')->default('0');
            $table->integer('kode_status')->default('0');
            $table->integer('aktual_temp_dies_move')->default('0');
            $table->integer('aktual_temp_dies_fix')->default('0');
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
        Schema::dropIfExists('mesincasting');
    }
}
