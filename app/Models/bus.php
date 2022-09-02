<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;

    protected $fillable = array ('numero', 'nombreplace', 'chauffeurs_id');

    public function chauffeurs()
    {
        return $this->belongsTo(chauffeur::class, 'chauffeurs_id');
    }

    public function voyages()
    {
        return $this->hasMany(voyage::class, 'buses_id');
    }

    public function courriers()
    {
        return $this->hasMany(courrier::class, 'buses_id');
    }

    public function bagages()
    {
        return $this->hasMany(bagage::class, 'buses_id');
    }
    
}

