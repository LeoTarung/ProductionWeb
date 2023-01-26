<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\MesinCasting;

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
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 02,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 04,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 05,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 06,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 07,
                'material' => 'HD-4',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 10,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 12,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 15,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 20,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 21,
                'material' => 'ADC-12',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],

            [
                'mc' => 22,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [

                'mc' => 23,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 24,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 25,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 27,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 28,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 29,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 30,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 31,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 32,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 33,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 34,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 35,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 36,
                'material' => 'ADC-12',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 37,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 38,
                'material' => 'ADC-12',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 39,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 40,
                'material' => 'HD-4',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 41,
                'material' => 'HD-4',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 42,
                'material' => 'HD-4',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 43,
                'material' => 'ADC-12',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 44,
                'material' => 'YH3R',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 45,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 46,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 47,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 48,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 49,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 50,
                'material' => 'ADC-12',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 51,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 52,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 53,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 54,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'mc' => 55,
                'material' => 'ADC-12',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
        ];

        MesinCasting::insert($molten);
    }
}
