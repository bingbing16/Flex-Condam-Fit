<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Developer;

class Developer extends Model
{
    use HasFactory;

    protected $table = 'developers';

    protected $fillable = [
        'name',
        'position',
        'description',
        'image',
    ];
}
