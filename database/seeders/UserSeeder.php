<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user'.random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('12345678'),
            'balance'=>1000,
        ]);
        // User::factory()
        // ->count(2)
        // ->create();
    }
}