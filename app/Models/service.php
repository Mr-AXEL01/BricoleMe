<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'tarif'
    ];


    public function artisan(){
        return $this->belongsTo(artisan::class);
    }

    public function reservation() {
        return $this->hasOne(reservation::class);
    }
}