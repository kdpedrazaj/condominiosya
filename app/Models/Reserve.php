<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    //Relacion Uno a Uno (Inversa)
    public function places()
    {
        return $this->belongsTo('App\Models\Place');
    }

    //Relacion Uno a Uno (Inversa)
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
