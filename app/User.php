<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function player()
    {
        return $this->hasOne('App\Models\Player');
    }

    public static $messages = [
        'vertical_stack.required' => 'This field is required',
        'horizontal_stack.required' => 'This field is required',
        'zone.required' => 'This field is required'
    ];

    public function isAdmin()
    {
        return $this->is_admin; // this looks for an admin column in your users table
    }
}
