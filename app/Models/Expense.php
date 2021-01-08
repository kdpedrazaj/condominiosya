<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos (Inversa)
    public function expensesdetails()
    {
        return $this->belongsTo('App\Models\Expensedetail');
    }

    // Relacion Uno a Muchos (Inversa)
    public function typesexpenses()
    {
        return $this->belongsTo('App\Models\Typesexpense');
    }

    // Relacion Uno a Muchos
    public function receipts()
    {
        return $this->hasMany('App\Models\Receipt');
    }
}
