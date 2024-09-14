<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable=['start_time','end_time','date','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function days()
    {
        return $this->hasMany(Day::class);

    }
}
