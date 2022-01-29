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
        //
        DB::table('users')->insert([
            [
                'name' => '中島三希子',
                'email' => 'test1@test.com',
                'tel' => '000-0000-1111',
                'password' => Hash::make('password1'),
            ],
            [
                'name' => '山藤咲',
                'email' => 'test2@test.com',
                'tel' => '000-0000-2222',
                'password' => Hash::make('password2'),
            ],
            [
                'name' => '山口孝介',
                'email' => 'test3@test.com',
                'tel' => '000-0000-3333',
                'password' => Hash::make('password3'),
            ],
        ]);
    }
}
