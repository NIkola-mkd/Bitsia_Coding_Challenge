<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculations extends Model
{
    use HasFactory;

    public function calculate()
    {
        return $this->belongsToMany(General::class, 'general_id');
    }
}
