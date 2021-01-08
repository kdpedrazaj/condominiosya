<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    //Relacion Uno a Uno
    public function residentials()
    {
        return $this->hasOne('App\Models\Residential');
    }
}
