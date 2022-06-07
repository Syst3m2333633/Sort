<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    //Relation entre Sortie et Lieu
    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }

    //Relation entre Sortie et Campus
    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    //Relation entre Sortie et Etat
    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }
}
