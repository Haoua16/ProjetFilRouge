<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'email',
        'password',
        'userId',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'userId');
    }

}
