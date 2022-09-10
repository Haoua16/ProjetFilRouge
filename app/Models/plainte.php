<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plainte extends Model
{
    use HasFactory;
    protected $fillable = array ('message', 'users_id');

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
