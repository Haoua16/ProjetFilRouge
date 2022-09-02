<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chauffeur extends Model
{
    use HasFactory;

    protected $fillable = array ('nom', 'prenom', 'ville');

    public function voyages()
    {
        return $this->hasMany(voyage::class, 'chauffeurs_id');
    }

    public function bus()
    {
        return $this->hasMany(bus::class, 'chauffeurs_id');
    }
}


