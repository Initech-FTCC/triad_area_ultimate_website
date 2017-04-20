<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'height_inches', 'vertical_stack', 'horizontal_stack', 'zone', 'experience', 'preferred_position'
    ];
}
