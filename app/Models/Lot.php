<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lot extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "lots";
    protected $guarded = [];
    public $timestamps = false;


    public function users(){
        return $this->belongsTo(User::class);
    }
}
