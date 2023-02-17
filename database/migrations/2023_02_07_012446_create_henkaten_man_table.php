<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_man', function (Blueprint $table) {
            $table->id('No');
            $table->string('Deskripsi');
            $table->string('Problem');
            $table->string('Countermeasure')->nullable();
            $table->string('Status');
            $table->string('Plan');
            $table->string('Safety');
            $table->string('Kakotora');
            $table->string('Job_Setup');
            $table->string('WI_Proses');
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('men');
    }
};
