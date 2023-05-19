<?php

namespace Database\Seeders;

use App\Models\Downtime;
use Illuminate\Database\Seeder;

class DowntimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = [
            [
                'id' => 1,
                'nama_downtime' => 'DANDORY',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 2,
                'nama_downtime' => 'TRIAL AFTER DANDORY',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 3,
                'nama_downtime' => 'TRIAL ENGINEERING',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 4,
                'nama_downtime' => 'STO',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 5,
                'nama_downtime' => 'PREVENTIVE',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 6,
                'nama_downtime' => '5R',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 7,
                'nama_downtime' => 'LAY OFF',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 8,
                'nama_downtime' => 'CLEANING KF',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 9,
                'nama_downtime' => 'MOLTEN HABIS',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 10,
                'nama_downtime' => 'KERETA KOSONG',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 11,
                'nama_downtime' => 'BASKET',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 12,
                'nama_downtime' => 'MOLTEN KEPENUHAN',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 13,
                'nama_downtime' => 'MOLTEN DROP',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 14,
                'nama_downtime' => 'KURAS MOLTEN',
                'kategori' => 'material',
                'casting' => true,
            ],
            [
                'id' => 15,
                'nama_downtime' => 'AIR MATI',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 16,
                'nama_downtime' => 'ANGIN DROP',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 17,
                'nama_downtime' => 'BURNER TROUBLE',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 18,
                'nama_downtime' => 'COUPLING INJECTION',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 19,
                'nama_downtime' => 'CRANE',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 20,
                'nama_downtime' => 'AIR MATI',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 21,
                'nama_downtime' => 'DIE MOVEMENT',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 22,
                'nama_downtime' => 'EXTRACTOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 23,
                'nama_downtime' => 'GAS MATI',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 24,
                'nama_downtime' => 'HOLDING BOCOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 25,
                'nama_downtime' => 'HYDROLIK',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 26,
                'nama_downtime' => 'INJECTION',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 27,
                'nama_downtime' => 'LOCK TIE BAR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 28,
                'nama_downtime' => 'MONITOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 29,
                'nama_downtime' => 'MOTOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 30,
                'nama_downtime' => 'NITROGEN',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 31,
                'nama_downtime' => 'PANEL MATI',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 32,
                'nama_downtime' => 'PERBAIKAN LOUNDER',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 33,
                'nama_downtime' => 'PLN OFF',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 34,
                'nama_downtime' => 'ROBOT TAKE OUT',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 35,
                'nama_downtime' => 'SAFETY DOOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 36,
                'nama_downtime' => 'SAFETY HOOK',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 37,
                'nama_downtime' => 'ANGIN BOCOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 38,
                'nama_downtime' => 'HIDROLIK BOCOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 39,
                'nama_downtime' => 'SETTING SENSOR ',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 40,
                'nama_downtime' => 'SOLENOID',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 41,
                'nama_downtime' => 'TERMO COUPLE',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 42,
                'nama_downtime' => 'TIEBAR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 43,
                'nama_downtime' => 'TRIMMING PRES ',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 44,
                'nama_downtime' => 'TROUBLE CONVEYOR',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 45,
                'nama_downtime' => 'TROUBLE LADLE',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 46,
                'nama_downtime' => 'ROBOT SPRAY',
                'kategori' => 'mesin',
                'casting' => true,
            ],
            [
                'id' => 47,
                'nama_downtime' => 'ADAPTOR SLEEVE',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 48,
                'nama_downtime' => '5R SCRAP DIES',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 49,
                'nama_downtime' => 'CAVITY GELOMBANG',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 50,
                'nama_downtime' => 'CLAMP DIE',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 51,
                'nama_downtime' => 'COOLING DIES',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 52,
                'nama_downtime' => 'CORE',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 53,
                'nama_downtime' => 'CRACK',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 54,
                'nama_downtime' => 'DEKOK',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 55,
                'nama_downtime' => 'DIES EROSI',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 56,
                'nama_downtime' => 'DIES GOMPAL',
                'kategori' => 'dies',
                'casting' => true,
            ],

            [
                'id' => 57,
                'nama_downtime' => 'DIES KASAR',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 58,
                'nama_downtime' => 'DIMENSI',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 59,
                'nama_downtime' => 'DISTRIBUTOR',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 60,
                'nama_downtime' => 'EJECTOR PIN',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 61,
                'nama_downtime' => 'EXT.GATE',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 62,
                'nama_downtime' => 'FLASH/ MUNCRAT',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 63,
                'nama_downtime' => 'GUIDE PIN',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 64,
                'nama_downtime' => 'INSERT PIN',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 65,
                'nama_downtime' => 'MODIFIKASI DIES',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 66,
                'nama_downtime' => 'OVER HEAT',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 67,
                'nama_downtime' => 'PART NEMPEL',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 68,
                'nama_downtime' => 'PLAT C',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 69,
                'nama_downtime' => 'PLUNGER ROD',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 70,
                'nama_downtime' => 'PLUNGER SLEEVE',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 71,
                'nama_downtime' => 'PLUNGER TIP',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 72,
                'nama_downtime' => 'REPAIR DIES',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 73,
                'nama_downtime' => 'SAFETY PLATE',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 74,
                'nama_downtime' => 'SKRAP TEBAL',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 75,
                'nama_downtime' => 'STOPPER MACHINING',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 76,
                'nama_downtime' => 'UNDERCUT',
                'kategori' => 'dies',
                'casting' => true,
            ],
            [
                'id' => 77,
                'nama_downtime' => 'CEK Q TIME',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 78,
                'nama_downtime' => 'CENTRAL DIE LUBE',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 79,
                'nama_downtime' => 'GANTI KASET SPRAY',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 80,
                'nama_downtime' => 'GATE PATAH',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 81,
                'nama_downtime' => 'JIG TOOL REPAIR',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 82,
                'nama_downtime' => 'LOT MARKING',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 83,
                'nama_downtime' => 'MAN POWER',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 84,
                'nama_downtime' => 'MANGKUK LADLE',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 85,
                'nama_downtime' => 'OLI HABIS',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 86,
                'nama_downtime' => 'CEK Q TIME',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 87,
                'nama_downtime' => 'CEK TPM',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 88,
                'nama_downtime' => 'SET PARAMETER',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 89,
                'nama_downtime' => 'SETTING DRILL',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 90,
                'nama_downtime' => 'SETTING SENSOR',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 91,
                'nama_downtime' => 'SETTING SPRAY',
                'kategori' => 'proses',
                'casting' => true,
            ],
            [
                'id' => 92,
                'nama_downtime' => 'SHOT BEADS',
                'kategori' => 'proses',
                'casting' => true,
            ],








        ];
        Downtime::insert($dt);
    }
}
