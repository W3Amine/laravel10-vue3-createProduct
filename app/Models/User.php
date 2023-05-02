<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    protected $hidden = [
        'password',
        'remember_token',
    ];

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
