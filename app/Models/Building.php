<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    // Relacion Muchos a Muchos
    public function places()
    {
        return $this->belongsToMany('App\Models\Place');
    }

    // Relacion Uno a Muchos (Inversa)
    public function residentials()
    {
        return $this->belongsTo('App\Models\Residential');
    }

    // Relacion Uno a Muchos
    public function apartments()
    {
        return $this->hasMany('App\Models\Apartment');
    }

    // Relacion Uno a Muchos
    public function receipts()
    {
        return $this->hasMany('App\Models\Receipt');
    }
}
