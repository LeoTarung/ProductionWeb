<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\MesinCasting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MoltenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('levels')->insert([

        $molten = [

            [
                'mc' => 01,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 02,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 04,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 05,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 06,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 07,
                'material' => 'HD-4',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 10,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 12,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 15,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 20,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 21,
                'material' => 'ADC-12',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],

            [
                'mc' => 22,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [

                'mc' => 23,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 24,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 25,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 27,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 28,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 29,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 30,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 31,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 32,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 33,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 34,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 35,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 36,
                'material' => 'ADC-12',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 37,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 38,
                'material' => 'ADC-12',
                'line' => 3,

                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 39,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 40,
                'material' => 'HD-4',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 41,
                'material' => 'HD-4',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 42,
                'material' => 'HD-4',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 43,
                'material' => 'ADC-12',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 44,
                'material' => 'YH3R',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 45,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 46,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 47,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 48,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 49,
                'material' => 'HD-2',
                'line' => 1,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 50,
                'material' => 'ADC-12',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 51,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 52,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 53,
                'material' => 'HD-2',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 54,
                'material' => 'HD-2',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 55,
                'material' => 'ADC-12',
                'line' => 3,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 56,
                'material' => 'ADC-12',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
            [
                'mc' => 57,
                'material' => 'ADC-12',
                'line' => 2,
                'aktual_molten' => 1000,
                'min_level_molten' => 2000,
                'max_level_molten' => 1000,
                'cavity' => 1,
                'updated_at' => Carbon::now(),
            ],
        ];

        MesinCasting::insert($molten);
    }
}
