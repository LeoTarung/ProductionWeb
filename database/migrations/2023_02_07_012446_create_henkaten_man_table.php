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
            $table->string('Status')->default('no');
            $table->string('Plan')->default('no');
            $table->string('Safety')->default('no');
            $table->string('Kakotora')->default('no');
            $table->string('Job_Setup')->default('no');
            $table->string('WI_Proses')->default('no');
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
