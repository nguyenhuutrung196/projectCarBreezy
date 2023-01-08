<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'Cart';
    protected $primaryKey = 'cart_id';
    public $timestamps = false;
    protected $fillable =[
        'cart_name',
        'cart_image',
        'cart_price',
        'cart_quantity',
    ];
}
