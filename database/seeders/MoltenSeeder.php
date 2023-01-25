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
                'id' => 1,
                'mc' => 1,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'id' => 2,
                'mc' => 2,
                'material' => 'HD-4',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'id' => 3,
                'mc' => 3,
                'material' => 'ADC-12',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'id' => 4,
                'mc' => 4,
                'material' => 'YH3R',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'id' => 5,
                'mc' => 5,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'id' => 6,
                'mc' => 6,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'id' => 7,
                'mc' => 7,
                'material' => 'HD-4',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
            [
                'id' => 8,
                'mc' => 8,
                'material' => 'HD-4',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ]
        ];

        MesinCasting::insert($molten);
    }
}
