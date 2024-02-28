<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetierArtisan extends Model
{
    use HasFactory;
    protected $table = 'metier_of_artisans';
    protected $fillable = [
        'metier_id',
        'artisan_id',
    ];
}
