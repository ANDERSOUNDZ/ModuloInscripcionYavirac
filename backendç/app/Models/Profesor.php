<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Postulante;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRES'
    ];

    public function postulante()
    {
        return $this->belongsTo(Postulante::class);
        // OR return $this->belongsTo('App\User');
    }
}
