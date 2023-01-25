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
            $table->integer('id_mesincasting')->default('0');
            $table->integer('tanggal')->default('0');
            $table->integer('nrp')->default('0');
            $table->integer('nama')->default('0');
            $table->integer('shift')->default('0');
            $table->integer('jam_kerja')->default('0');
            $table->integer('nama_part')->default('0');
            $table->integer('cycle_time')->default('0');
            $table->integer('target')->default('0');
            $table->integer('dies')->default('0');
            $table->integer('total_produksi')->default('0');
            $table->integer('total_ok')->default('0');
            $table->integer('total_ng')->default('0');
            $table->integer('total_downtime')->default('0');
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
            $table->integer('adaptor_sleeve')->default('0');
            $table->integer('baut_cavity_lepas')->default('0');
            $table->integer('bersih-bersih_scrap_dies')->default('0');
            $table->integer('cavity_gelombang')->default('0');
            $table->integer('chill_vent')->default('0');
            $table->integer('clamp_die')->default('0');
            $table->integer('cooling_adaptor')->default('0');
            $table->integer('cooling_dies')->default('0');
            $table->integer('cooling_plunge_sleeve')->default('0');
            $table->integer('cooling_plunger_tip')->default('0');
            $table->integer('core')->default('0');
            $table->integer('dies_erosi')->default('0');
            $table->integer('dies_movement')->default('0');
            $table->integer('dies_tidak_bisa_dibuka')->default('0');
            // $table->integer('dies_tidak_bisa_dibuka')->default('0');
            $table->integer('dies_tidak_center')->default('0');
            $table->integer('dimensi')->default('0');
            $table->integer('distributor')->default('0');
            $table->integer('ejector_pin')->default('0');
            $table->integer('ejector_rod/bumper')->default('0');
            $table->integer('ex_gate')->default('0');
            $table->integer('flash/muncrat')->default('0');
            $table->integer('guide_pin')->default('0');
            $table->integer('kopling_injection')->default('0');
            $table->integer('kopling_plunger_tip')->default('0');
            $table->integer('modifikasi_dies')->default('0');
            $table->integer('plat_c')->default('0');
            $table->integer('plunger_rod')->default('0');
            $table->integer('plunger_sleeve')->default('0');
            $table->integer('plunger_tip')->default('0');
            $table->integer('repair_crack')->default('0');
            $table->integer('repair_dekok')->default('0');
            $table->integer('repair_dies_cacat')->default('0');
            $table->integer('repair_dies_kasar')->default('0');
            $table->integer('repair_insert_pin')->default('0');
            $table->integer('repair_overheat')->default('0');
            $table->integer('repair_part_nempel')->default('0');
            $table->integer('repair_undercut')->default('0');
            $table->integer('safety_plate')->default('0');
            $table->integer('skrap_tebal')->default('0');
            $table->integer('stopper_machining')->default('0');
            $table->integer('support_pilar')->default('0');
            $table->integer('cek_ukur')->default('0');
            $table->integer('central_die_lube')->default('0');
            $table->integer('ganti_kaset_spray')->default('0');
            $table->integer('gate_sering_patah')->default('0');
            $table->integer('jalur_supply_masalah')->default('0');
            $table->integer('kuras_molten')->default('0');
            $table->integer('ladle_cup')->default('0');
            $table->integer('lot_marking')->default('0');
            $table->integer('man_power')->default('0');
            $table->integer('oli_habis')->default('0');
            $table->integer('pengecekan_awal')->default('0');
            $table->integer('set_parameter')->default('0');
            $table->integer('setting_drill')->default('0');
            $table->integer('setting_mangkok')->default('0');
            $table->integer('setting_sensor_product')->default('0');
            $table->integer('setting_spray')->default('0');
            $table->integer('shot_beads')->default('0');
            $table->integer('tool_repair')->default('0');
            $table->integer('air')->default('0');
            $table->integer('angin')->default('0');
            $table->integer('burner')->default('0');
            $table->integer('coupling_injection')->default('0');
            $table->integer('crane')->default('0');
            $table->integer('extractor')->default('0');
            $table->integer('forklift')->default('0');
            $table->integer('gas_mati')->default('0');
            $table->integer('holding_bocor')->default('0');
            $table->integer('hydrolik')->default('0');
            $table->integer('injection')->default('0');
            $table->integer('lock_tie_bar')->default('0');
            $table->integer('monitor')->default('0');
            $table->integer('motor')->default('0');
            $table->integer('nitrogen')->default('0');
            $table->integer('panel_mati')->default('0');
            $table->integer('perbaikan_lounder')->default('0');
            $table->integer('safety_door')->default('0');
            $table->integer('safety_hook')->default('0');
            $table->integer('sander_belt')->default('0');
            // $table->integer('setting_sensor_product')->default('0');
            $table->integer('solenoid')->default('0');
            $table->integer('termocouple')->default('0');
            $table->integer('tiebar')->default('0');
            $table->integer('trimming_pres_trouble')->default('0');
            $table->integer('trouble_conveyor')->default('0');
            $table->integer('trouble_robot_spray')->default('0');
            $table->integer('trouble_robot_take_out')->default('0');
            $table->integer('molten_habis')->default('0');
            $table->integer('molten_drop')->default('0');
            $table->integer('packaging_kosong')->default('0');
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
