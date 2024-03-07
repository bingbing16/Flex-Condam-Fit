<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NutCat;

class Diet extends Model
{
    use HasFactory;

    protected $table = 'diet';

    protected $fillable = [
        'name',
        'bfast',
        'lunch',
        'snack',
        'dinner',
        'midsnack',
        'totalcalories',
        'image',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(NutCat::class,'category_id', 'id');
    }
}
