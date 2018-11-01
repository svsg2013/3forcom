<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YourRfp extends Model
{
    
    protected $table = 'your_rfp';

    protected $fillable = [
        'requirement_document',
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'country',
        'solutions',
        'describe_requirement'
    ];

}