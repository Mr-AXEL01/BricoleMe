<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function metier(){
        return $this->belongsTo(metier::class);
    }

    public function artisan() {
        return $this->hasMany(artisan::class);
    }
}