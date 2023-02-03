<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelReviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'profession', 'description', 'photo'
    ];
}
