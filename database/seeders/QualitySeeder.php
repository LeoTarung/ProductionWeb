<?php

namespace Database\Seeders;

use App\Models\StatusQualityModel;
use Illuminate\Database\Seeder;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [

            [
                'id' => 01,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 02,
                'warna' => "yellow",
                'shift' => 3
            ],
            [
                'id' => 04,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 05,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 06,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 07,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 10,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 12,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 15,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 20,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 21,
                'warna' => "yellow",
                'shift' => 1

            ],

            [
                'id' => 22,
                'warna' => "yellow",
                'shift' => 2

            ],
            [

                'id' => 23,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 24,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 25,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 27,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 28,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 29,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 30,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 31,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 32,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 33,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 34,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 35,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 36,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 37,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 38,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 39,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 40,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 41,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 42,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 43,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 44,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 45,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 46,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 47,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 48,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 49,
                'warna' => "yellow",
                'shift' => 3

            ],
            [
                'id' => 50,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 51,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 52,
                'warna' => "yellow",
                'shift' => 1
            ],
            [
                'id' => 53,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 54,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 55,
                'warna' => "yellow",
                'shift' => 1

            ],
            [
                'id' => 56,
                'warna' => "yellow",
                'shift' => 2

            ],
            [
                'id' => 57,
                'warna' => "yellow",
                'shift' => 2

            ],

        ];

        StatusQualityModel::insert($status);
    }
}
