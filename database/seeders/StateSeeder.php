<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
          [
           'name' => 'همدان',
           'country_id' => '1',
          ],
          [
            'name' => 'تهران',
            'country_id' => '1',
           ],
           [
            'name' => 'اراک',
            'country_id' => '1',
           ],
           [
            'name' => 'اصفهان',
            'country_id' => '1',
           ],
           [
            'name' => 'شیراز',
            'country_id' => '1',
           ]
        ]);
    }
}
