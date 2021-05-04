<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Added new
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
            'name'=>'raman',
            'email'=>'raman@gmail.com',
            'password'=>Hash::make('123')
        ]);
    }
}
