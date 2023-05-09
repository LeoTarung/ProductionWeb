<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LhpCastingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_casting_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lhp');
            $table->foreign('id_lhp')->references('id')->on('lhp_casting')->onDelete('cascade');
            $table->unsignedBigInteger('id_ng')->nullable();
            $table->foreign('id_ng')->references('id')->on('reject_ng')->onDelete('cascade');
            $table->unsignedBigInteger('id_dt')->nullable();
            $table->foreign('id_dt')->references('id')->on('downtime')->onDelete('cascade');
            $table->integer('tp_0')->default(0);
            $table->integer('tp_1')->default(0);
            $table->integer('tp_2')->default(0);
            $table->integer('tp_3')->default(0);
            $table->integer('tp_4')->default(0);
            $table->integer('tp_5')->default(0);
            $table->integer('tp_6')->default(0);
            $table->integer('tp_7')->default(0);
            $table->integer('tp_8')->default(0);
            $table->integer('tp_9')->default(0);
            $table->integer('tp_10')->default(0);
            $table->integer('tp_11')->default(0);
            $table->integer('tp_12')->default(0);
            $table->integer('tp_13')->default(0);
            $table->integer('tp_14')->default(0);
            $table->integer('tp_15')->default(0);
            $table->integer('tp_16')->default(0);
            $table->integer('tp_17')->default(0);
            $table->integer('tp_18')->default(0);
            $table->integer('tp_19')->default(0);
            $table->integer('tp_20')->default(0);
            $table->integer('tp_21')->default(0);
            $table->integer('tp_22')->default(0);
            $table->integer('tp_23')->default(0);
            $table->integer('tn_0')->default(0);
            $table->integer('tn_1')->default(0);
            $table->integer('tn_2')->default(0);
            $table->integer('tn_3')->default(0);
            $table->integer('tn_4')->default(0);
            $table->integer('tn_5')->default(0);
            $table->integer('tn_6')->default(0);
            $table->integer('tn_7')->default(0);
            $table->integer('tn_8')->default(0);
            $table->integer('tn_9')->default(0);
            $table->integer('tn_10')->default(0);
            $table->integer('tn_11')->default(0);
            $table->integer('tn_12')->default(0);
            $table->integer('tn_13')->default(0);
            $table->integer('tn_14')->default(0);
            $table->integer('tn_15')->default(0);
            $table->integer('tn_16')->default(0);
            $table->integer('tn_17')->default(0);
            $table->integer('tn_18')->default(0);
            $table->integer('tn_19')->default(0);
            $table->integer('tn_20')->default(0);
            $table->integer('tn_21')->default(0);
            $table->integer('tn_22')->default(0);
            $table->integer('tn_23')->default(0);
            $table->integer('td_0')->default(0);
            $table->integer('td_1')->default(0);
            $table->integer('td_2')->default(0);
            $table->integer('td_3')->default(0);
            $table->integer('td_4')->default(0);
            $table->integer('td_5')->default(0);
            $table->integer('td_6')->default(0);
            $table->integer('td_7')->default(0);
            $table->integer('td_8')->default(0);
            $table->integer('td_9')->default(0);
            $table->integer('td_10')->default(0);;
            $table->integer('td_11')->default(0);;
            $table->integer('td_12')->default(0);;
            $table->integer('td_13')->default(0);;
            $table->integer('td_14')->default(0);;
            $table->integer('td_15')->default(0);;
            $table->integer('td_16')->default(0);;
            $table->integer('td_17')->default(0);;
            $table->integer('td_18')->default(0);;
            $table->integer('td_19')->default(0);;
            $table->integer('td_20')->default(0);;
            $table->integer('td_21')->default(0);;
            $table->integer('td_22')->default(0);;
            $table->integer('td_23')->default(0);;
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
        //
    }
}
