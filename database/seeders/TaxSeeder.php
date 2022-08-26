<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxes')->insert([
            [
            'county_id' => '1',
            'amount' => rand(1000, 1000000),
           ],
           [
            'county_id' => '2',
            'amount' => rand(1000, 1000000),
           ],
           [
            'county_id' => '3',
            'amount' => rand(1000, 1000000),
           ],
           [
            'county_id' => '4',
            'amount' => rand(1000, 1000000),
           ],
           [
            'county_id' => '5',
            'amount' => rand(1000, 1000000),
           ],
           [
            'county_id' => '6',
            'amount' => rand(1000, 1000000),
           ],
           [
            'county_id' => '7',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '8',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '9',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '10',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '11',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '12',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '13',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '14',
            'amount' => rand(1000, 1000000),
            ],
            [
            'county_id' => '15',
            'amount' => rand(1000, 1000000),
            ],
          ]);
    }
}
