<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    // Relacion Muchos a Muchos
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion Uno a Uno
    public function typesaliquots()
    {
        return $this->hasOne('App\Models\Typesaliquot');
    }

    //Relacion Uno a Uno
    public function typesapartments()
    {
        return $this->hasOne('App\Models\Typesapartment');
    }

    // Relacion Muchos a Muchos
    public function receipts()
    {
        return $this->belongsToMany('App\Models\Receipt');
    }

    // Relacion Uno a Muchos (Inversa)
    public function buildings()
    {
        return $this->belongsTo('App\Models\Building');
    }
}
