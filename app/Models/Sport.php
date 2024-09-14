<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $fillable=['name', 'user_id','facility_id'];


    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->hasOne(Room::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
