<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RejectNGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reject_ng', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_reject');
            $table->integer('posisi');
            $table->boolean('casting')->default(false);
            $table->boolean('machining')->default(false);
            $table->boolean('gravity')->default(false);
            $table->boolean('gravity_casting')->default(false);
            $table->boolean('gravity_finishing')->default(false);
            $table->boolean('assembling')->default(false);
            $table->boolean('final_inspection')->default(false);
            $table->boolean('painting')->default(false);
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
