<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function metier(){
        return $this->belongsTo(Metier::class);
    }

    public function artisan() {
        return $this->blelongsToMany(Artisan::class);
    }
}