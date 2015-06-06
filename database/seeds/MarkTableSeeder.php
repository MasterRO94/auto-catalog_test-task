<?php

use Illuminate\Database\Seeder;
use App\CarMark;

class MarkTableSeeder extends Seeder {
    public function run()
    {
        DB::table('car_marks')->delete();

        $marks = [
            '1' => ['title' => 'Acura', 'slug' => 'acura' ],
            '2' => ['title' => 'Alfa Romeo', 'slug' => 'alfa_romeo' ],
            '3' => ['title' => 'Audi', 'slug' => 'audi' ],
            '4' => ['title' => 'Bently', 'slug' => 'bently' ],
            '5' => ['title' => 'BMW', 'slug' => 'bmw' ],
            '6' => ['title' => 'Cadillac', 'slug' => 'cadillac' ],
            '7' => ['title' => 'Cherry', 'slug' => 'cherry' ],
            '8' => ['title' => 'Chevrolet', 'slug' => 'chevrolet' ],
            '9' => ['title' => 'Chrysler', 'slug' => 'chrysler' ],
            '10' => ['title' => 'Citroen', 'slug' => 'citroen' ],
            '11' => ['title' => 'Daewoo', 'slug' => 'daewoo' ],
            '12' => ['title' => 'Dodge', 'slug' => 'dodge' ],
            '13' => ['title' => 'Ford', 'slug' => 'ford' ],
            '14' => ['title' => 'Honda', 'slug' => 'honda' ],
            '15' => ['title' => 'Hyundai', 'slug' => 'hyundai' ],
            '16' => ['title' => 'Jaguar', 'slug' => 'jaguar' ],
            '17' => ['title' => 'Jeep', 'slug' => 'jeep' ],
            '18' => ['title' => 'Land Rover', 'slug' => 'land_rover' ],
            '19' => ['title' => 'Lexus', 'slug' => 'lexus' ],
            '20' => ['title' => 'Mazda', 'slug' => 'mazda' ],
            '21' => ['title' => 'Mercedes', 'slug' => 'mercedes' ],
            '22' => ['title' => 'Mitsubishi', 'slug' => 'mitsubishi' ],
            '23' => ['title' => 'Nissan', 'slug' => 'nissan' ],
            '24' => ['title' => 'Opel', 'slug' => 'opel' ],
            '25' => ['title' => 'Peugeot', 'slug' => 'peugeot' ],
            '26' => ['title' => 'Porsche', 'slug' => 'porsche' ],
            '27' => ['title' => 'Renault', 'slug' => 'renault' ],
            '28' => ['title' => 'Skoda', 'slug' => 'skoda' ],
            '29' => ['title' => 'Subaru', 'slug' => 'subaru' ],
            '30' => ['title' => 'Toyota', 'slug' => 'toyota' ],
            '31' => ['title' => 'Volkswagen', 'slug' => 'volkswagen' ],
            '32' => ['title' => 'Volvo', 'slug' => 'volvo' ],
        ];

        foreach ($marks as $id => $data) {
            CarMark::create([
                'id' => $id,
                'title' => $data['title'],
                'slug' => $data['slug'],
            ]);
        }



    }
}