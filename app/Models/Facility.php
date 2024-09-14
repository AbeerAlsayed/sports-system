<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable=['name','capacity','number',];



    public function sports()
    {
        return $this->hasMany(Sport::class);
    }
}
