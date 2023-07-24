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
            [['title'=>'Тифлисский кадет',
            'image_path'=>'https://b.itemimg.com/i/295839571.0.jpg',
            'description'=>'Кадет Тифлисского кадетского корпуса',
            'min_price'=>1000,
            'user_id'=>1,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(3),
            'deleted_at'=>NULL],
            ['title'=>'Сумский кадет',
            'image_path'=>'https://b.itemimg.com/i/295796679.0.jpg',
            'description'=>'Вице унтер-офицер Сумского кадетского коруса',
            'min_price'=>500,
            'user_id'=>2,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(4),
            'deleted_at'=>NULL],
            ['title'=>'Тифлисский юнкер',
            'image_path'=>'https://b.itemimg.com/i/295840277.0.jpg',
            'description'=>'Юнкер Тифлисского пехотного юнкерского училиша',
            'min_price'=>2000,
            'user_id'=>1,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(5),
            'deleted_at'=>NULL],
            ['title'=>'Московский кадет',
            'image_path'=>'https://b.itemimg.com/i/295827062.0.jpg',
            'description'=>'Кадет 3 Московского кадетского корпуса',
            'min_price'=>900,
            'user_id'=>2,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(6),
            'deleted_at'=>NULL],    
            ['title'=>'Александровский кадет',
            'image_path'=>'https://b.itemimg.com/i/285172371.0.jpg',
            'description'=>'Кадет Александровского кадетского корпуса',
            'min_price'=>800,
            'user_id'=>2,
            'win_user_id'=>NULL,
            'end_date'=>Carbon::now()->addMinutes(7),
            'deleted_at'=>NULL],
        ]);
    }
}
