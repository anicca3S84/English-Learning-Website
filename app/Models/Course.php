<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'title',
        'imageUrl',
        'description',
        'introduce',
        'slug',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;
}
