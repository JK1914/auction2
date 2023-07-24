<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'user_id', 'to_user', 'title', 'message', 'date_time'
    ];


    public function users(){
        return $this->belongsTo(User::class);
    }
}
