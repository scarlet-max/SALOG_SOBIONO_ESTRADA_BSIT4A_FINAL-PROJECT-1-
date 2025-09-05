<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Optional if table name is default 'products'
    // protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
        'quantity',
    ];
}
