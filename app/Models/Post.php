<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'author',
        'description',
    ];
}
