<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('123456')]);
        User::create(['name' => 'MasterRO', 'email' => 'igoshin18@gmail.com', 'password' => bcrypt('123456')]);

    }
}