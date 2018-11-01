<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultantsNetwork extends Model
{
    
    protected $table = 'consultants_network';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'technical_consultant',
        'requirement_details'
    ];

}