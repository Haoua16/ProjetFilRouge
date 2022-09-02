<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courrier extends Model
{
    use HasFactory;

    protected $fillable = array ('nomdestinateur', 'prenomdestinateur', 'numerodestinateur', 'nomdestinataire', 'prenomdestinataire', 'numerodestinataire', 'nature', 'valeur', 'montantpaye', 'buses_id');

    public function bus()
    {
        return $this->belongsTo(bus::class, 'buses_id');
    }
    
}
