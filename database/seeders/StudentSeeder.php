<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            [ 'student' => '一般' ],
            [ 'student' => '大学生' ],
            [ 'student' => '高校生' ],
            [ 'student' => '中学生' ],
            [ 'student' => '小学生以下' ],
        ]);
    }
}
