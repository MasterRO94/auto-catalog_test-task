<?php

use Illuminate\Database\Seeder;
use App\CarMark;

class MarkTableSeeder extends Seeder {
    public function run()
    {
        DB::table('car_marks')->delete();

        $marks = [
            '1' => 'Acura',
            '2' => 'Alfa Romeo',
            '3' => 'Audi',
            '4' => 'Bently',
            '5' => 'BMW',
            '6' => 'Cadillac',
            '7' => 'Cherry',
            '8' => 'Chevrolet',
            '9' => 'Chrysler',
            '10' => 'Citroen',
            '11' => 'Daewoo',
            '12' => 'Dodge',
            '13' => 'Ford',
            '14' => 'Honda',
            '15' => 'Hyundai',
            '16' => 'Jaguar',
            '17' => 'Jeep',
            '18' => 'Land Rover',
            '19' => 'Lexus',
            '20' => 'Mazda',
            '21' => 'Mercedes',
            '22' => 'Mitsubishi',
            '23' => 'Nissan',
            '24' => 'Opel',
            '25' => 'Peugeot',
            '26' => 'Porsche',
            '27' => 'Renault',
            '28' => 'Skoda',
            '29' => 'Subaru',
            '30' => 'Toyota',
            '31' => 'Volkswagen',
            '32' => 'Volvo',
        ];

        foreach ($marks as $id => $title) {
            CarMark::create([
                'id' => $id,
                'title' => $title,
            ]);
        }



    }
}