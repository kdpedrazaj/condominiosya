<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    // Relacion Muchos a Muchos
    public function apartments()
    {
        return $this->belongsToMany('App\Models\Apartment');
    }

    // Relacion Uno a Muchos
    public function months()
    {
        return $this->belongsTo('App\Models\Month');
    }

    // Relacion Uno a Muchos (Inversa)
    public function expenses()
    {
        return $this->belongsTo('App\Models\Expense');
    }

    // Relacion Muchos a Muchos
    public function buildings()
    {
        return $this->belongsToMany('App\Models\Building');
    }

    // Relacion Muchos a Muchos
    public function payments()
    {
        return $this->belongsToMany('App\Models\Payment');
    }
}
