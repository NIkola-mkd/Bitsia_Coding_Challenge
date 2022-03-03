<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function calculate()
    {

        return $this->belongsToMany(Calculations::class, 'calculations_general', 'general_id');
    }
}
