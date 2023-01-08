<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'Feedback';
    protected $primaryKey = 'feedback_id';
    public $timestamps = false;
    protected $fillable =[
        'feedback_cus',
        'feedback_car',
        'feedback_content',
        'feedback_rating',
        'feedback_date',
        'feedback_email',
        'feedback_contact'
    ];
}
