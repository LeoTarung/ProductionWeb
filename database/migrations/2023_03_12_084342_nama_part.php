<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NamaPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_namapart', function (Blueprint $table) {
            $table->id();
            // $table->integer('id')->primary();
            $table->string('kode_part')->unique();
            $table->string('nama_part')->nullable()->default("");
            $table->string('material')->nullable();
            $table->string('proses')->nullable();
            $table->string('kode_customer')->nullable();
            $table->string('customer')->nullable()->default("");
            $table->integer('berat_part')->nullable();
            $table->integer('berat_shot')->nullable();
            $table->integer('std_packaging')->nullable();
            $table->string('customer_material')->nullable();
            $table->string('jenis_material')->nullable();
            $table->integer('cavity')->nullable();
            $table->integer('cycle_timer')->nullable();
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
