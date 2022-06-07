<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //Relation entre Campus et Sortie
    public function sortie()
    {
        return $this->hasMany(Sortie::class);
    }
