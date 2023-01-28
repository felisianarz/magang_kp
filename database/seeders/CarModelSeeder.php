<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['A-CLASS', 'GLA', 'C-CLASS', 'GLB', 'E-CLASS', 'GLC', 'GLE', 'CLA'];

        foreach ($datas as $data) {
            CarModel::create([
                'model_name' => $data
            ]
            );
        }
    }
}
