<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primary_key = 'course_id';
        protected $fillable = [
        'tanant_id',
        'course_name',
        'teacher_id',
    ];

}
