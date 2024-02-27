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

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function metier() {
<<<<<<< HEAD
        return $this->blelongsToMany(Metier::class);
    }

    public function competance() {
        return $this->belonsToMany(Competance::class);
=======
        return $this->belongsToMany(Metier::class);
    }

    public function competance() {
        return $this->belongsToMany(Competance::class);
    }
    
    public function service() {
        return $this->hasMany(Service::class);
>>>>>>> origin/master
    }
  
}