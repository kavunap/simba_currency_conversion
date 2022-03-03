<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create(['name'=>'user'.rand(),'email'=>'email'.rand().'@example.com','password'=>Hash::make('12345678'),'balance'=>1000]);
    }
}
