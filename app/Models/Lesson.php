<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons'; // nếu tên bảng là 'lessons'

    protected $fillable = [
        'courseId',
        'title',
        'slug',
        'content',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'content' => 'array', // Laravel sẽ tự decode JSON
    ];
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
