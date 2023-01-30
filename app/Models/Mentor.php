<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    protected $fillable = [
        'name', 'profession', 'description', 'photo'
    ];
}
