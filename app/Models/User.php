<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> cb58bb5 (chore: initial commit with Laravel 12)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
=======
    /** @use HasFactory<\Database\Factories\UserFactory> */
>>>>>>> cb58bb5 (chore: initial commit with Laravel 12)
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var list<string>
>>>>>>> cb58bb5 (chore: initial commit with Laravel 12)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be hidden for arrays.
     *
     * @var array
=======
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
>>>>>>> cb58bb5 (chore: initial commit with Laravel 12)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
=======
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
>>>>>>> cb58bb5 (chore: initial commit with Laravel 12)
}
