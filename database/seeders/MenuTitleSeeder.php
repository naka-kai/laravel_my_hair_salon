<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menu_titles')->insert([
            [
                'menu_title' => 'カット',
                'explanation' => 'シャンプー・ブロー込み'
            ],
            [
                'menu_title' => 'カラー',
                'explanation' => 'シャンプー・ブロー込み'
            ],
            [
                'menu_title' => 'パーマ',
                'explanation' => 'シャンプー・ブロー・カット込み'
            ],
            [
                'menu_title' => 'ストレート',
                'explanation' => 'シャンプー・ブロー・カット込み'
            ],
            [
                'menu_title' => 'セット',
            ],
        ]);
    }
}
