<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetanceArtisan extends Model
{
    use HasFactory;
    protected $table = 'aritans_of_competance';
    protected $fillable = [
        'competance_id',
        'artisan_id',
    ];
}
