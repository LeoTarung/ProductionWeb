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
            // $table->id();
            $table->integer('mc')->primary();
            $table->string('material');
            $table->integer('aktual_molten')->default('0');
            $table->integer('min_level_molten')->default('0');
            $table->integer('max_level_molten')->default('0');
            $table->string('nama_part')->nullable()->default("");
            $table->integer('cavity')->default('1');
            $table->string('nomor_dies')->nullable();
            $table->integer('cycle_time')->default('0');
            $table->integer('total_produksi')->default('0');
            $table->integer('kode_kanban')->default('0');
            $table->integer('henkaten_mp')->default('0');
            $table->integer('henkaten_mat')->default('0');
            $table->integer('henkaten_met')->default('0');
            $table->integer('henkaten_mc')->default('0');
            $table->integer('kode_status')->default('0');
            $table->integer('aktual_temp_dies_move_atas')->default('0');
            $table->integer('aktual_temp_dies_move_bawah')->default('0');
            $table->integer('aktual_temp_dies_fix_atas')->default('0');
            $table->integer('aktual_temp_dies_fix_bawah')->default('0');
            $table->string('updated_by')->nullable();
            $table->integer('connection')->default('0');
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
