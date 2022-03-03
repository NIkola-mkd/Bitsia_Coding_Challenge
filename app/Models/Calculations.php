<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculations extends Model
{
    use HasFactory;

    protected $fillable = [
        'general_id',
        'name',
        'description',
        'quantity',
        'unit_price',
        'sum'
    ];

    public $timestamps = false;

    public function calculate()
    {
        return $this->hasMany(General::class, 'calculations_general');
    }
}
