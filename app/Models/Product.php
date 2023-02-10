<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'brand_id',
        'product_name',
        'product_description',
        'product_image',
        'product_price',
    ];

    use HasFactory;
}
