<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residential extends Model
{
    use HasFactory;

    //Relacion Uno a Uno (Inversa)
    public function addresses()
    {
        return $this->belongsTo('App\Models\Address');
    }

    // Relacion Uno a Muchos
    public function buildings()
    {
        return $this->hasMany('App\Models\Building');
    }

}
