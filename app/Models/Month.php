<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos (Inversa)
    public function recipts()
    {
        return $this->hasMany('App\Models\Receipt');
    }

    // Relacion Uno a Muchos (Inversa)
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
