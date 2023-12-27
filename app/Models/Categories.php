<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = true;
    public $fillable = [
        'id',
        'category_name',
        'category_content',
    ];
}
