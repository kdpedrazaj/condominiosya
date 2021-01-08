<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expensesdetail extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos (Inversa)
    public function expenses()
    {
        return $this->belongsTo('App\Models\Expense');
    }

    // Relacion Uno a Muchos (Inversa)
    public function typemeasures()
    {
        return $this->belongsTo('App\Models\Typemeasure');
    }
}
