<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'status'
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function reclamation(){
        return $this->haseOne(Reclamation::class);
    }

    public function review(){
        return $this->haseOne(Review::class);
    }

    

    
}