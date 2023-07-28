<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lots')->insert(
            [['title'=>'10 копеек',
            'image_path'=>'https://b.itemimg.com/i/284401924.0.jpg?1',
            'description'=>'10 копеек 1916 г.',
            'min_price'=>1000,
            'user_id'=>1,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(3),
            'deleted_at'=>NULL],
            ['title'=>'20 копеек',
            'image_path'=>'https://b.itemimg.com/i/67208087.0.jpg',
            'description'=>'20 копеек 1871 г.',
            'min_price'=>500,
            'user_id'=>2,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(10),
            'deleted_at'=>NULL],
            ['title'=>'10 копеек',
            'image_path'=>'https://b.itemimg.com/i/284507139.0.jpg?1',
            'description'=>'10 копеек 1916 г.',
            'min_price'=>2000,
            'user_id'=>1,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(15),
            'deleted_at'=>NULL],
            ['title'=>'2 копейки',
            'image_path'=>'https://b.itemimg.com/i/107303746.0.jpg?8',
            'description'=>'2 копейки 1869 г.',
            'min_price'=>900,
            'user_id'=>2,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(20),
            'deleted_at'=>NULL],    
            ['title'=>'2 копейки',
            'image_path'=>'https://b.itemimg.com/i/284949620.0.jpg?1',
            'description'=>'2 копейки 1914 г.',
            'min_price'=>800,
            'user_id'=>2,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(40),
            'deleted_at'=>NULL],
            ['title'=>'2 копейки',
            'image_path'=>'https://b.itemimg.com/i/267906373.0.jpg?2',
            'description'=>'2 копейки 1915 г.',
            'min_price'=>1200,
            'user_id'=>1,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(7),
            'deleted_at'=>NULL],
            ['title'=>'15 копеек',
            'image_path'=>'https://b.itemimg.com/i/247813622.0.jpg?1',
            'description'=>'15 копеек 1906 г.',
            'min_price'=>1200,
            'user_id'=>1,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(7),
            'deleted_at'=>NULL],
        ]);
    }
}
