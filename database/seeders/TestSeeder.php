<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestModel;


class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = [

            [
                'id' => 2,
                'ingot' => 30,
                'total_charging' => 1343,
                'loss' => 60,
                'tanggal' => '2023-01-01'
            ],
            [
                'id' => 3,
                'ingot' => 18,
                'total_charging' => 743,
                'loss' => 10,
                'tanggal' => '2023-01-01'
            ],
            [
                'id' => 4,
                'ingot' => 25,
                'total_charging' => 1343,
                'loss' => 40,
                'tanggal' => '2023-01-01'
            ],
            [
                'id' => 5,
                'ingot' => 25,
                'total_charging' => 2000,
                'loss' => 30,
                'tanggal' => '2023-01-01'
            ],
            [
                'id' => 6,
                'ingot' => 20,
                'total_charging' => 1587,
                'loss' => 930,
                'tanggal' => '2023-01-01'
            ],
            [
                'id' => 7,
                'ingot' => 29,
                'total_charging' => 1338,
                'loss' => 930,
                'tanggal' => '2023-01-01'
            ],
            [
                'id' => 8,
                'ingot' => 15,
                'total_charging' => 1809,
                'loss' => 45,
                'tanggal' => '2023-01-01'
            ]
        ];

        TestModel::insert($test);
    }
}
