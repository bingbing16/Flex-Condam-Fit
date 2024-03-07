<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseImage extends Model
{
    use HasFactory;

    protected $table = 'exercises_images';

    protected $fillable =[
        'exercise_id',
        'image',
    ];
}
