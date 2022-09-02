<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bagage extends Model
{
    use HasFactory;
    protected $fillable = array ('nature', 'nombrebagage', 'montantpaye', 'buses_id', 'passagers_id');
    
    public function bus()
    {
        return $this->belongsTo(bus::class, 'buses_id');
    }
    
    public function passagers()
    {
        return $this->belongsTo(passager::class, 'passagers_id');
    }

}
