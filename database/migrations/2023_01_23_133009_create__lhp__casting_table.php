<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLhpCastingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp_casting', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_mesincasting')->nullable();
            $table->integer('id_mesincasting');
            $table->foreign('id_mesincasting')->references('mc')->on('mesin_casting')->onDelete('cascade');
            $table->integer('nrp1')->default('0');
            $table->integer('nrp2')->default('0');
            $table->integer('nrp3')->default('0');
            $table->integer('nrp4')->default('0');
            $table->integer('nrp5')->default('0');
            $table->integer('nrp6')->default('0');
            $table->date('tanggal')->nullable();
            $table->string('shift')->default('0');
            $table->time('jam_available')->default('0');
            $table->time('jam_running')->default('0');
            $table->string('nama_part')->default('0');
            $table->string('nomor_dies')->default("#");
            $table->integer('cavity')->default("1");
            $table->integer('target')->default('0');
            $table->integer('total_produksi')->default('0');
            $table->integer('total_ok')->default('0');
            $table->integer('total_ng')->default('0');
            $table->time('total_downtime')->default('0');
            $table->integer('bercak_hitam')->default('0');
            $table->integer('blister')->default('0');
            $table->integer('bushing')->default('0');
            $table->integer('cacat_casting')->default('0');
            $table->integer('crack')->default('0');
            $table->integer('dekok')->default('0');
            $table->integer('dent')->default('0');
            $table->integer('ejector_patah')->default('0');
            $table->integer('flowline')->default('0');
            $table->integer('gate_ng')->default('0');
            $table->integer('gelombang')->default('0');
            $table->integer('gompal')->default('0');
            $table->integer('insert_pin')->default('0');
            $table->integer('keropos')->default('0');
            $table->integer('part_nempel')->default('0');
            $table->integer('retak')->default('0');
            $table->integer('step')->default('0');
            $table->integer('undercut')->default('0');
            $table->integer('kulit_jeruk')->default('0');
            $table->integer('melengkung')->default('0');
            $table->integer('overheat')->default('0');
            $table->integer('part_jatuh')->default('0');
            $table->integer('partingline')->default('0');
            $table->integer('sleeveing_miring')->default('0');
            $table->integer('warming_up')->default('0');
            $table->time('adaptor_sleeve')->default('0');
            $table->time('baut_cavity_lepas')->default('0');
            $table->time('bersih-bersih_scrap_dies')->default('0');
            $table->time('cavity_gelombang')->default('0');
            $table->time('chill_vent')->default('0');
            $table->time('clamp_die')->default('0');
            $table->time('cooling_adaptor')->default('0');
            $table->time('cooling_dies')->default('0');
            $table->time('cooling_plunge_sleeve')->default('0');
            $table->time('cooling_plunger_tip')->default('0');
            $table->time('core')->default('0');
            $table->time('dies_erosi')->default('0');
            $table->time('dies_movement')->default('0');
            $table->time('dies_tidak_bisa_dibuka')->default('0');
            $table->time('dies_tidak_center')->default('0');
            $table->time('dimensi')->default('0');
            $table->time('distributor')->default('0');
            $table->time('ejector_pin')->default('0');
            $table->time('ejector_rod/bumper')->default('0');
            $table->time('ex_gate')->default('0');
            $table->time('flash')->default('0');
            $table->time('guide_pin')->default('0');
            $table->time('kopling_injection')->default('0');
            $table->time('kopling_plunger_tip')->default('0');
            $table->time('modifikasi_dies')->default('0');
            $table->time('plat_c')->default('0');
            $table->time('plunger_rod')->default('0');
            $table->time('plunger_sleeve')->default('0');
            $table->time('plunger_tip')->default('0');
            $table->time('repair_crack')->default('0');
            $table->time('repair_dekok')->default('0');
            $table->time('repair_dies_cacat')->default('0');
            $table->time('repair_dies_kasar')->default('0');
            $table->time('repair_insert_pin')->default('0');
            $table->time('repair_overheat')->default('0');
            $table->time('repair_part_nempel')->default('0');
            $table->time('repair_undercut')->default('0');
            $table->time('safety_plate')->default('0');
            $table->time('skrap_tebal')->default('0');
            $table->time('stopper_machining')->default('0');
            $table->time('support_pilar')->default('0');
            $table->time('cek_ukur')->default('0');
            $table->time('central_die_lube')->default('0');
            $table->time('ganti_kaset_spray')->default('0');
            $table->time('gate_sering_patah')->default('0');
            $table->time('jalur_supply_masalah')->default('0');
            $table->time('kuras_molten')->default('0');
            $table->time('ladle_cup')->default('0');
            $table->time('lot_marking')->default('0');
            $table->time('man_power')->default('0');
            $table->time('oli_habis')->default('0');
            $table->time('pengecekan_awal')->default('0');
            $table->time('set_parameter')->default('0');
            $table->time('setting_drill')->default('0');
            $table->time('setting_mangkok')->default('0');
            $table->time('setting_sensor_product')->default('0');
            $table->time('setting_spray')->default('0');
            $table->time('shot_beads')->default('0');
            $table->time('tool_repair')->default('0');
            $table->time('air')->default('0');
            $table->time('angin')->default('0');
            $table->time('burner')->default('0');
            $table->time('coupling_injection')->default('0');
            $table->time('crane')->default('0');
            $table->time('extractor')->default('0');
            $table->time('forklift')->default('0');
            $table->time('gas_mati')->default('0');
            $table->time('holding_bocor')->default('0');
            $table->time('hydrolik')->default('0');
            $table->time('injection')->default('0');
            $table->time('lock_tie_bar')->default('0');
            $table->time('monitor')->default('0');
            $table->time('motor')->default('0');
            $table->time('nitrogen')->default('0');
            $table->time('panel_mati')->default('0');
            $table->time('perbaikan_lounder')->default('0');
            $table->time('safety_door')->default('0');
            $table->time('safety_hook')->default('0');
            $table->time('sander_belt')->default('0');
            $table->time('solenoid')->default('0');
            $table->time('termocouple')->default('0');
            $table->time('tiebar')->default('0');
            $table->time('trimming_pres_trouble')->default('0');
            $table->time('trouble_conveyor')->default('0');
            $table->time('trouble_robot_spray')->default('0');
            $table->time('trouble_robot_take_out')->default('0');
            $table->time('molten_habis')->default('0');
            $table->time('molten_drop')->default('0');
            $table->time('packaging_kosong')->default('0');
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('lhp_casting');
    }
}
