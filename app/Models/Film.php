<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'genre', 'film_image', 'rating', 'description', 'created_at', 'updated_at'
    ];
}
