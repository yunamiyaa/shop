<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->delete();
        DB::table('stocks')->insert([
            0 => [
                'id' => 1,
                'name' => 'いちごパフェ',
                'content' => '旬のいちごのパフェです',
                'fee' => 2000,
                'filename' => 'filmcamera.jpg',
                ],
            1 => [
                'id' => 2,
                'name' => 'さくらんぼパフェ',
                'content' => '国産さくらんぼのパフェです',
                'fee' => 2000,
                'filename' => 'filmcamera.jpg',
            ],
            2 => [
                'id' => 3,
                'name' => 'チョコレートパフェ',
                'content' => 'カカオ７６％を使用したパフェ',
                'fee' => 1500,
                'filename' => 'filmcamera.jpg',
            ],
            3 => [
                'id' => 4,
                'name' => '抹茶パフェ',
                'content' => '宇治抹茶のパフェ',
                'fee' => 1800,
                'filename' => 'filmcamera.jpg',
            ],
            4 => [
                'id' => 5,
                'name' => 'チーズケーキパフェ',
                'content' => '極上のクリームチーズを使ったパフェ',
                'fee' => 1800,
                'filename' => 'filmcamera.jpg',
            ],
            5 => [
                'id' => 6,
                'name' => 'メロンパフェ',
                'content' => '国産メロンのさっぱりとたパフェ',
                'fee' => 2000,
                'filename' => 'filmcamera.jpg',
            ],
        ]);
    }
}
