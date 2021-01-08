<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    //Relacion Uno a Uno
    public function examples1()
    {
        return $this->hasOne('App\Models\Example1');
    }

    //Relacion Uno a Uno (Inversa)
    public function examples2()
    {
        return $this->belongsTo('App\Models\Example2');
    }

    // Relacion Uno a Muchos
    public function examples3()
    {
        return $this->hasMany('App\Models\Example3');
    }

    // Relacion Uno a Muchos (Inversa)
    public function examples4()
    {
        return $this->belongsTo('App\Models\Example4');
    }

    // Relacion Muchos a Muchos
    public function examples5()
    {
        return $this->belongsToMany('App\Models\Example5');
    }

    // Relacion Muchos a Muchos
    public function examples6()
    {
        return $this->belongsToMany('App\Models\Example6');
    }
}