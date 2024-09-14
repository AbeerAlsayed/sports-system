<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['subscription_id', 'validity_period', 'description'];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
