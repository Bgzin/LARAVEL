<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Gerente as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Gerente extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

