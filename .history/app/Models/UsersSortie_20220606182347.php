<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersSortie extends Model
{
    use HasFactory;
    public function usersSortie() {
        return $this->belongsToMany(UsersSortie::class);
    }
}
