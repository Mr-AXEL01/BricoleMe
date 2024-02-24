<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
     
    ];
    



    public function competance() {
        return $this->hasMany(competance::class);
    }

    public function artisan() {
        return $this->hasMany(artisan::class);
    }
}