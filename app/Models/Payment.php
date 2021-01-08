<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function months()
    {
        return $this->belongsTo('App\Models\Month');
    }

    // Relacion Muchos a Muchos
    public function receipts()
    {
        return $this->belongsToMany('App\Models\Receipt');
    }
}
