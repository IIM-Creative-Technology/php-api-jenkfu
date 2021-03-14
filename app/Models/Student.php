<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'first_name',
        'age',
        'year',
        //'class_id',
    ];

    // public function student() {
    //     return $this->belongsTo(Student::class);
    // }
}
