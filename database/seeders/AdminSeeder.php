<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            [
                'name' => '田中りょうじ',
                'email' => 'test101@test.com',
                'tel' => '000-9999-0000',
                'password' => Hash::make('password101'),
            ],
        ]);
    }
}
