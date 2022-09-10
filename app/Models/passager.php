<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passager extends Model
{
    use HasFactory;
    protected $fillable = array ('nom', 'prenom', 'numerotelephone', 'nombreplace', 'voyages_id');

    public function bagages()
    {
        return $this->hasMany(bagage::class, 'passagers_id');
    }

    public function reservations()
    {
        return $this->hasMany(reservation::class, 'passagers_id');
    }

    public function voyages()
    {
        return $this->belongsTo(voyage::class, 'voyages_id');
    }

}
