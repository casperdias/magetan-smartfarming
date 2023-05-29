<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class espdata extends Model
{
    use HasFactory;
    protected $fillable = [
        'espkey',
        'suhu',
        'ph'
    ];
}
