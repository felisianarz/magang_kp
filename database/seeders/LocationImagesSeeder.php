<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            array(
                'location_id' => 1,
                'path' => 'kalimas-yogya-1.jpg'
            ),
            array(
                'location_id' => 1,
                'path' => 'kalimas-yogya-2.jpg'
            ),
            array(
                'location_id' => 1,
                'path' => 'kalimas-yogya-3.jpg'
            ),
            array(
                'location_id' => 2,
                'path' => 'kalimas-semarang-1.jpg'
            ),
            array(
                'location_id' => 2,
                'path' => 'kalimas-semarang-2.jpg'
            ),
            array(
                'location_id' => 2,
                'path' => 'kalimas-semarang-3.jpg'
            ),
            array(
                'location_id' => 3,
                'path' => 'kalimas-bali-1.jpg'
            ),
            array(
                'location_id' => 3,
                'path' => 'kalimas-bali-2.jpg'
            ),
            array(
                'location_id' => 3,
                'path' => 'kalimas-bali-3.jpg'
            ),
            array(
                'location_id' => 4,
                'path' => 'kalimas-solo-1.jpg'
            ),
            array(
                'location_id' => 4,
                'path' => 'kalimas-solo-2.jpg'
            ),
            array(
                'location_id' => 4,
                'path' => 'kalimas-solo-3.jpg'
            ),

        );
    }
}
