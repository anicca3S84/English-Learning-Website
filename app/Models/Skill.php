<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills'; 

    protected $fillable = [
        'title',
        'slug',
        'imageUrl',
        'introduce',
        'description',
        'slug',
        'created_at',
        'updated_at',
    ];

     public function courses() {
        return $this->hasMany(Course::class);
    }

    public $timestamps = true;
}
