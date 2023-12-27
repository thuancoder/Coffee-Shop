<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = true;
    public $fillable = [
        'id',
        'name',
        'slug',
        'product_content',
        'thumbnail',
        'view',
        'id_categories',
        'price',
        'sale_price',
    ];
}
