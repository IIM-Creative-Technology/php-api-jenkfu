<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'year',
    ];

    public function classes() {
        return $this->hasMany(Classe::class);
    }
}


