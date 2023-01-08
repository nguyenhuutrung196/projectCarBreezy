<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'Car';
    protected $primaryKey = 'car_id';
    public $timestamps = false;
    protected $fillable =[
        'car_name',
        'car_brand',
        'car_model',
        'car_price',
        'car_img_name1',
        'car_img_name2',
        'car_img_name3',
        'car_img_name4',
        'car_status',
        'car_color',
        'car_hp',
        'car_type',
        'car_engine',
        'car_fuel',
        'car_transmission',
        'car_content',
        'car_manufacturer_year',
        'car_distance_traveled'
    ];
}
