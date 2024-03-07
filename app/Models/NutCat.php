<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Diet;
use App\Models\NutCat;

class NutCat extends Model
{
    use HasFactory;

    protected $table = 'nutcat';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function calories()
    {
        return $this->hasMany(Diet::class, 'category_id', 'id');
    }
}
