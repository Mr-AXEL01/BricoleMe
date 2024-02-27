<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function metier() {
        return $this->hasMany(Metier::class);
    }

    public function competance() {
        return $this->hasMany(Competance::class);
    }
    
    public function service() {
        return $this->hasMany(Service::class);
    }
}