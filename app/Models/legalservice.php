<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class legalservice extends Model
{
    use HasFactory;


    
    protected $fillable = [
        'service_name',
        'quantity',
    ];
}
