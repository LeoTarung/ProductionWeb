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
        Schema::create('tb_mesin', function (Blueprint $table) {
            $table->id('No');
            $table->string('deskripsi');
            $table->string('Problem');
            $table->string('Countermeasure')->nullable();
            $table->string('Status');
            $table->string('Plan');
            $table->string('Safety');
            $table->string('Kakotora');
            $table->string('Trial_NS');
            $table->string('CP_CPK');
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
        Schema::dropIfExists('mesins');
    }
};
