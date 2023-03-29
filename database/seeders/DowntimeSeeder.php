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
                'nama_downtime' => 'Dandory',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 2,
                'nama_downtime' => 'Trial After Dandory',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 3,
                'nama_downtime' => 'Trial Engineering',
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
                'nama_downtime' => 'Preventive',
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
                'nama_downtime' => 'Lay Off',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 8,
                'nama_downtime' => 'Cleaning KF',
                'kategori' => 'terplanning',
                'casting' => true,
            ],
            [
                'id' => 9,
                'nama_downtime' => 'Molten Habis',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 10,
                'nama_downtime' => 'Kereta Kosong',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 11,
                'nama_downtime' => 'Basket',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 12,
                'nama_downtime' => 'Molten Kepenuhan',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 13,
                'nama_downtime' => 'Molten Drop ',
                'kategori' => 'material',
                'casting' => true,
            ],

            [
                'id' => 14,
                'nama_downtime' => 'Kuras Molten',
                'kategori' => 'material',
                'casting' => true,
            ],


        ];
        Downtime::insert($dt);
    }
}
