<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'name'=>"Almas YAseen",
            'email'=> "almas64@gmail.com",
            'password'=>Hash::make('12345'),
            'created_at'=> date('Y-m-d h:i:s'),
            'updated_at'=> date('Y-m-d h:i:s')
        ]);
    }
}
