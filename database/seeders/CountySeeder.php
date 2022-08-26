<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert([
            [
             'name' => 'ملایر',
             'state_id' => '1',
             'tax_rate' => rand(0, 100)/100,
            ],
            [
              'name' => 'رزن',
              'state_id' => '1',
              'tax_rate' => rand(0, 100)/100,
             ],
             [
              'name' => 'کبودرآهنگ',
              'state_id' => '1',
              'tax_rate' => rand(0, 100)/100,
             ],
             [
              'name' => 'نهاوند',
              'state_id' => '1',
              'tax_rate' => rand(0, 100)/100,
             ],
             [
              'name' => 'فیروزکوه',
              'state_id' => '2',
              'tax_rate' => rand(0, 100)/100,
             ],
             [
                'name' => 'دماوند',
                'state_id' => '2',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'پردیس',
                'state_id' => '2',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'خنداب',
                'state_id' => '3',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'خمین',
                'state_id' => '3',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'ساوه',
                'state_id' => '3',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'نجف آباد',
                'state_id' => '4',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'خمینی شهر',
                'state_id' => '4',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'شاهین شهر',
                'state_id' => '4',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'فسا',
                'state_id' => '5',
                'tax_rate' => rand(0, 100)/100,
            ],
            [
                'name' => 'کازرون',
                'state_id' => '5',
                'tax_rate' => rand(0, 100)/100,
            ]
          ]);
    }
}
