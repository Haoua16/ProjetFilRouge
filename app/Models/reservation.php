<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = array ('nombreplace', 'users_id', 'voyages_id', 'statut');

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    
    public function voyages()
    {
        return $this->belongsTo(voyage::class, 'voyages_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    
}
