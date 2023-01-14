<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('password'),
                'role' => '0',
            ],

            [
                'id' => '2',
                'name' => 'まさひろ',
                'email' => 'wisteriamemory@gmail.com',
                'password' => Hash::make('password'),
                'role' => '1',
            ],

            [
                'id' => '3',
                'name' => 'hirono',
                'email' => 'hirono@hirono.com',
                'password' => Hash::make('password'),
                'role' => '1',
            ],



        ]);
    }
}
