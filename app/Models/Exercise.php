<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExerciseImage;
use App\Models\Category;


class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercises';

    protected $fillable =[
        'category_id',
        'name',
        'small_description',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function exerciseImages()
    {
        return $this->hasMany(ExerciseImage::class, 'exercise_id', 'id');
    }
}
