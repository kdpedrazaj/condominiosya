<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    //Relacion Uno a Uno (Inversa)
    public function reserves()
    {
        return $this->hasOne('App\Models\Reserve');
    }

    // Relacion Muchos a Muchos
    public function buildings()
    {
        return $this->belongsToMany('App\Models\Building');
    }
}
