<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends \Illuminate\Foundation\Auth\User
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
