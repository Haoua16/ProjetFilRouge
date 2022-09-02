<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinationclient extends Model
{
    use HasFactory;

    protected $fillable = array ('nombreplace', 'voyages_id');

    public function voyage()
    {
        return $this->belongsTo(voyage::class, 'voyages_id');
    }

}
