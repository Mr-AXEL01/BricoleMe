<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'status'
    ];

    public function service(){
        return $this->belongsTo(service::class);
    }

    public function reclamation(){
        return $this->haseOne(reclamation::class);
    }

    public function review(){
        return $this->haseOne(review::class);
    }

    

    
}