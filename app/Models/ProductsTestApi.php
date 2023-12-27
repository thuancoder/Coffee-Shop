<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsTestApi extends Model
{
    use HasFactory;

    protected $table = 'productapi';
    public $timestamps = true;
    public $fillable = [
        'id',
        'name',
        'price',
        'tags'
    ];
}
