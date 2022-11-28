<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLhpMeltingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_melting', function (Blueprint $table) {
            $table->id();
            $table->integer('id_lhp');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('shift');
            $table->integer('ingot')->default('0');
            $table->integer('basemetal')->default('0');
            $table->integer('exgate')->default('0');
            $table->integer('overflow')->default('0');
            $table->integer('reject_parts')->default('0');
            $table->integer('alm_treat')->default('0');
            $table->integer('total_return')->default('0');
            $table->integer('persen_ingot')->default('0');
            $table->integer('tapping')->default('0');
            $table->integer('stok_molten')->default('0');
            $table->integer('temperature')->default('0');
            $table->integer('fluxing')->default('0');
            $table->integer('k_value')->default('0');
            $table->integer('dross')->default('0');
            $table->integer('dross_treat')->default('0');
            $table->integer('los_dross')->default('0');
            $table->integer('oil_scrap')->default('0');
            $table->integer('oil_scrap_treat')->default('0');
            $table->integer('los_oil_scrap')->default('0');
            $table->integer('total_losses')->default('0');
            $table->integer('gas_awal')->default('0');
            $table->integer('gas_akhir')->default('0');
            $table->integer('gas_rata')->default('0');
            $table->integer('total_charging')->default('0');
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
        Schema::dropIfExists('lhp_melting');
    }
}
