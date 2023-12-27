<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    public $timestamps = true;
    public $fillable = [
        'id',
        'order_id',
        'product_id',
        'qty',
        'price',
    ];
}
