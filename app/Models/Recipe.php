<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'food_name',
        'ingredients',
        'instructions',
        'prep_time',
    ];
}
