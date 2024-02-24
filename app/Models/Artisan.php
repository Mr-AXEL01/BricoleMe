<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;


    public function metier() {
        return $this->hasMany(metier::class);
    }

    public function competance() {
        return $this->hasMany(competance::class);
    }
}