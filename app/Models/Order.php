<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'Order';
    protected $primaryKey = 'feedback_id';
    public $timestamps = false;
    protected $fillable =[
        'feedback_cus',
        'feedback_car',
        'feedback_content',
        'feedback_rating',
        'feedback_date'
    ];
}
