<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestTeam extends Model
{
    
    protected $table = 'request_team';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'team_size',
        'product_description',
        'duration'
    ];

}