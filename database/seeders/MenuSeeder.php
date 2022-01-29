<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            [
                //1
                'menu_title_id' => '1',
                'title' => '一般',
                'price' => '3500',
            ],
            [
                //2
                'menu_title_id' => '1',
                'title' => '大学生',
                'price' => '3000',
            ],
            [
                //3
                'menu_title_id' => '1',
                'title' => '高校生',
                'price' => '2500',
            ],
            [
                //4
                'menu_title_id' => '1',
                'title' => '中学生',
                'price' => '2000',
            ],
            [
                //5
                'menu_title_id' => '1',
                'title' => '小学生以下',
                'price' => '1800',
            ],

            [
                //6
                'menu_title_id' => '2',
                'title' => 'カラー',
                'price' => '6000',
            ],
            [
                //7
                'menu_title_id' => '2',
                'title' => 'ヘナカラー',
                'price' => '6500',
            ],
            [
                //8
                'menu_title_id' => '2',
                'title' => 'マニキュア',
                'price' => '6500',
            ],
            [
                //9
                'menu_title_id' => '2',
                'title' => 'カラー＋カット',
                'price' => '8000',
            ],

            [
                //10
                'menu_title_id' => '3',
                'title' => 'パーマ',
                'price' => '7000',
            ],
            [
                //11
                'menu_title_id' => '3',
                'title' => 'ポイントパーマ',
                'price' => '5000',
            ],
            [
                //12
                'menu_title_id' => '3',
                'title' => 'デジタルパーマ',
                'price' => '10000',
            ],
            [
                //13
                'menu_title_id' => '3',
                'title' => '縮毛矯正＋デジタルパーマ',
                'price' => '15000',
            ],

            [
                //14
                'menu_title_id' => '4',
                'title' => '縮毛矯正',
                'price' => '10000',
            ],
            [
                //15
                'menu_title_id' => '4',
                'title' => 'ポイント矯正',
                'price' => '2000',
            ],

            [
                //16
                'menu_title_id' => '5',
                'title' => 'シャンプー・ブロー',
                'price' => '2500',
            ],
            [
                //17
                'menu_title_id' => '5',
                'title' => 'アップセット',
                'price' => '3000',
            ],
            [
                //18
                'menu_title_id' => '5',
                'title' => 'ダウンセット',
                'price' => '2000',
            ],
        ]);
    }
}
