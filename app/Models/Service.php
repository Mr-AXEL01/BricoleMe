<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function artisan(){
        return $this->belongsTo(Artisan::class);
    }

    public function reservation() {
        return $this->hasOne(Reservation::class);
    }
}