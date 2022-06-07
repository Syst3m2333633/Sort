<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersSortie extends Model
{
    use HasFactory;
    //Relation entre UsersSortie et User
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    //Relation entre UsersSortie et Sortie
    public function sortie()
    {
        return $this->belongsToMany(Sortie::class);
    }
}
