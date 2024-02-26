<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;
     
    protected $fillable = ['user_id', 'images', 'description'];

    protected $casts = [
        'images' => 'array',
    ];

    public function metier() {
        return $this->hasMany(metier::class);
    }

    public function competance() {
        return $this->hasMany(competance::class);
    }
    public function user (){
        return $this->belongsto(user::class)
    }
}