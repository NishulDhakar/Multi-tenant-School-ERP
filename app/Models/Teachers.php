<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teachers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primary_key = 'teacher_id';
        protected $fillable = [
        'tanant_id',
        'first_name',
        'last_name',
        'subject',
    ];
}
