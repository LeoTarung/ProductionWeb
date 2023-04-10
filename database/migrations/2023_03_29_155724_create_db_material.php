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
                $table->char('material_sap');
                $table->char('initial');
                $table->char('kode_sap');
                $table->integer('kebutuhan_mrp');
                $table->integer('kebutuhan_daily');
                $table->integer('min_stock');
                $table->integer('max_stock');
                $table->integer('actual_stock');
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
