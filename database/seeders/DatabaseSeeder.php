<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(2)->create();

        for ($i=0; $i < 2 ; $i++) { 
            \App\Models\User::factory()->create(['name'=>'user'.$i,'email'=>'email'.$i.'@example.com','password'=>Hash::make('12345678'),'balance'=>1000]);
        }
    }

    
}
