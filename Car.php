<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand', 'model', 'plate_number', 'year', 'daily_rate',
        'last_service_at', 'is_available', 'notes', 'color'
    ];

    protected $casts = [
        'last_service_at' => 'date',
        'is_available' => 'boolean',
        'daily_rate' => 'decimal:2',
    ];
}
