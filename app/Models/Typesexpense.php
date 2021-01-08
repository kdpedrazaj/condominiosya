<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typesexpense extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function expenses()
    {
        return $this->hasMany('App\Models\Expense');
    }
}
