<?php

use Illuminate\Database\Seeder;
use App\CarModel;
use App\CarOptions;
use App\Car;

class CarTableSeeder extends Seeder {
    public function run()
    {
        DB::table('cars')->delete();

        $car_options = CarOptions::all();

        for($i=2, $count = count($car_options) - 5; $i<$count; $i+=5){
            $img = mt_rand(1,9);
            Car::create(['car_options_id' => $car_options[$i]->id, 'image' => $img.'.jpg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias amet iusto libero, molestiae nemo quis saepe sunt totam unde! Aliquid assumenda aut inventore iusto, laborum, molestiae mollitia porro provident quas ut, vel voluptate voluptatum!' ]);
            $img = mt_rand(1,9);
            Car::create(['car_options_id' => $car_options[$i+1]->id, 'image' => $img.'.jpg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias amet iusto libero, molestiae nemo quis saepe sunt totam unde! Aliquid assumenda aut inventore iusto, laborum, molestiae mollitia porro provident quas ut, vel voluptate voluptatum!' ]);
            $img = mt_rand(1,9);
            Car::create(['car_options_id' => $car_options[$i+2]->id, 'image' => $img.'.jpg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias amet iusto libero, molestiae nemo quis saepe sunt totam unde! Aliquid assumenda aut inventore iusto, laborum, molestiae mollitia porro provident quas ut, vel voluptate voluptatum!' ]);
        }

    }
}