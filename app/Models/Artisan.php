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
        return $this->belongsToMany(Metier::class);
    }

    public function competance() {
        return $this->belongsToMany(Competance::class);
    }
}