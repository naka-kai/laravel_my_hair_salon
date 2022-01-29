<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reserves')->insert([
            [
                'menu_id' => '10',
                'person_id' => '1',
                'date_time' => '2022-01-10',
            ],
            [
                'menu_id' => '9',
                'person_id' => '2',
                'date_time' => '2022-01-10',
            ],
            [
                'menu_id' => '3',
                'person_id' => '3',
                'date_time' => '2022-3-15',
            ],
            [
                'menu_id' => '1',
                'person_id' => '4',
                'date_time' => '2022-8-03',
            ],
            [
                'menu_id' => '3',
                'person_id' => '5',
                'date_time' => '2022-09-21',
            ],
            [
                'menu_id' => '1',
                'person_id' => '6',
                'date_time' => '2022-09-21',
            ],

            [
                'menu_id' => '10',
                'person_id' => '1',
                'date_time' => '2021-02-10',
            ],
            [
                'menu_id' => '1',
                'person_id' => '3',
                'date_time' => '2021-5-20',
            ],
            [
                'menu_id' => '3',
                'person_id' => '4',
                'date_time' => '2020-11-06',
            ],
        ]);
    }
}
