<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('people')->insert([
            [
                'user_id' => '1',
                'name' => '中島三希子',
                'birthday' => '1994-04-22',
                'sex' => 'その他',
                'student_id' => '1'
            ],
            [
                'user_id' => '1',
                'name' => '中島優香',
                'birthday' => '1997-03-26',
                'sex' => '女',
                'student_id' => '1'
            ],
            [
                'user_id' => '2',
                'name' => '山藤咲',
                'birthday' => '2004-05-25',
                'sex' => '女',
                'student_id' => '3'
            ],
            [
                'user_id' => '3',
                'name' => '山口孝介',
                'birthday' => '1980-10-05',
                'sex' => '男',
                'student_id' => '1'
            ],
            [
                'user_id' => '3',
                'name' => '山口隆',
                'birthday' => '2015-08-03',
                'sex' => '男',
                'student_id' => '5'
            ],
            [
                'user_id' => '3',
                'name' => '山口恵子',
                'birthday' => '1983-09-10',
                'sex' => '女',
                'student_id' => '1'
            ],
        ]);
    }
}
