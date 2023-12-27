<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    protected $table = 'product_categories';
    public $timestamps = true;
    public $fillable = [
        'id',
        'category_name',
        'category_content',
    ];
}
