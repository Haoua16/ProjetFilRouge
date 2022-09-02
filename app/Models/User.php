<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'prenom',
        'telephone',
        'email',
        'password',
        'statut',
    ];
 
    public function administrateur()
    {
        return $this->hasMany(Administrateur::class, 'userId');
    }

    public function gescourrier()
    {
        return $this->hasMany(GesCourrier::class, 'userId');
    }

    public function comptable()
    {
        return $this->hasMany(Comptable::class, 'userId');
    }

    public function client()
    {
        return $this->hasMany(Client::class, 'userId');
    }

    public function directeur()
    {
        return $this->hasMany(Directeur::class, 'userId');
    }

    public function reservation()
    {
        return $this->hasMany(reservation::class, 'users_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

