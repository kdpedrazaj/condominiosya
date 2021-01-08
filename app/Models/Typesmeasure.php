<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typesmeasure extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function expensesdetails()
    {
        return $this->hasMany('App\Models\Expensedetail');
    }
}
