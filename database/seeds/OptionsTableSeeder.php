<?php

use Illuminate\Database\Seeder;
use App\CarModel;
use App\CarOptions;

class OptionsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('car_options')->delete();

        $models = CarModel::all()->toArray();

        for($i = 0, $count = count($models); $i<$count; $i++ ){
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_1.2'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_1.4'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_1.5'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_1.6'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_1.8'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_2.0'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_2.5'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_2.8'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_3.0'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_3.5'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_3.8'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_4.0'
            ]);
            CarOptions::create([
                'model_id' => $models[$i]['id'],
                'title' => 'mode_4.5'
            ]);
        }

    }
}