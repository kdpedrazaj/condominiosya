<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typesapartment extends Model
{
    use HasFactory;

    //Relacion Uno a Uno (Inversa)
    public function apartments()
    {
        return $this->belongsTo('App\Models\Apartment');
    }
}
