<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stretching extends Model
{
    use HasFactory;

    protected $table = 'stretching';

    protected $fillable = [
        'name',
        'description',
        'sets',
        'reps',
        'image',
    ];
}
