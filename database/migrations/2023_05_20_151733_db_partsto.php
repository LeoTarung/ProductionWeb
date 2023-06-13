<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbPartsto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_partsto', function (Blueprint $table) {
            $table->id();
            $table->string('tag');
            $table->string('kode_part');
            $table->boolean('nama_part');
            $table->string('qty');
            $table->string('area');
            $table->boolean('status');
            $table->unsignedBigInteger('counter_id');
            $table->foreign('counter_id')->references('id')->on('db_mpsto')->onDelete('cascade');
            $table->unsignedBigInteger('verificator_id')->nullable();
            $table->foreign('verificator_id')->references('id')->on('db_mpsto')->onDelete('cascade');
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
