<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert(
            [['name'=>'Вася',
            'email'=>'mail1@mail.ru',
            'password'=>Hash::make('1234'),
            'is_admin'=>0,
            'is_active'=>1,
            'rating'=>NULL],
            ['name'=>'Ваня',
            'email'=>'mail2@mail.ru',
            'password'=>Hash::make('12345'),
            'is_admin'=>0,
            'is_active'=>1,
            'rating'=>NULL],
            ['name'=>'Олег',
            'email'=>'mail3@mail.ru',
            'password'=>Hash::make('123456'),
            'is_admin'=>1,
            'is_active'=>1,
            'rating'=>NULL],          
            ]);
    }
}
