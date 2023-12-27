<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public $timestamps = true;
    public $fillable = [
        'id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'shipping_address',
        'note',
        'total',
        'user_id',
    ];
}
