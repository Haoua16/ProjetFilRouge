<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voyage extends Model
{
    use HasFactory;

    protected $fillable = array ('villedepart', 'villearrive', 'datedepart', 'heuredepart', 'rendezvous', 'buses_id', 'chauffeurs_id');

    public function chauffeurs()
    {
        return $this->belongsTo(chauffeur::class, 'chauffeurs_id');
    }
    
    public function bus()
    {
        return $this->belongsTo(bus::class, 'buses_id');
    }

    public function reservation()
    {
        return $this->hasMany(reservation::class, 'voyages_id');
    }

    public function passager()
    {
        return $this->hasMany(passager::class, 'voyages_id');
    }

}
