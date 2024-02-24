<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamation extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'status'
    ];


    
    public function reservation(){
        return $this->belongsTo(reservation::class);
    }
}