<?php

namespace App\Services;

use App\Models\User;

class Service
{
    public static function add($lots){
        for($i=0;$i<count($lots);$i++){
            $user = User::where('id', $lots[$i]->user_id)->first()->name;
            $lot=$lots[$i]['name']=$user; 
        }
        return $lots;   
    }
}
