<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends Model
{
                use HasFactory;
    public $timestamps = false;
    protected $primary_key = 'tenant_id';
        protected $fillable = [
        'tanant_id',
        'school_name',
        'address',
    ];
}
