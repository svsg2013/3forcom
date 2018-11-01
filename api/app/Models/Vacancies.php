<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    
    protected $table = 'vacancies';

    protected $fillable = [
        'first_name',
        'last_name',
        'passion',
        'email',
        'phone',
        'cv',
        'message'
    ];

}