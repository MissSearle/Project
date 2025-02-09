<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'type',
    ];

    // If you'd like typed casts (optional):
    // protected $casts = [
    //     'value' => 'array', // or 'boolean', 'integer', etc., if using the 'type' column or a JSON column
    // ];
}
