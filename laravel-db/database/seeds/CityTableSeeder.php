<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $cities = [
            ['name' => 'Jakarta', 'map' => 'https://goo.gl/maps/ugdFU'],
            ['name' => 'Bogor', 'map' => 'https://goo.gl/maps/ExzYT'],
            ['name' => 'Depok', 'map' => 'https://goo.gl/maps/30JxC'],
            ['name' => 'Tangerang', 'map' => 'https://goo.gl/maps/Yn0yZ'],
            ['name' => 'Bekasi', 'map' => 'https://goo.gl/maps/T17QQ']
        ];

        DB::table('cities')->insert($cities);
    }
}
