<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'name',
        'description',
        'price_normal',
        'price_familiar',
        'file'
    ];
}
