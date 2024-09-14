<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=['name','capacity','number','sport_id'];



    public function sport()
    {
        return $this->hasOne(Sport::class);
    }
}
