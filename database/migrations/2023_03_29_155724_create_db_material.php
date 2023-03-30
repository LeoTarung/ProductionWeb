<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_material', function (Blueprint $table) {
                $table->id('No');
                $table->string('nama');
                $table->string('nrp');
                $table->string('kode_sap');
                $table->string('kebutuhan_mrp');
                $table->string('kebutuhan_daily');
                $table->timestamp('timestamp');
                $table->string('tipe_ingot');
                $table->string('quantity');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_material');
    }
}
