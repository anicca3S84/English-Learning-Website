<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
        'courseId',
        'title',
        'slug',
        'content',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('is_finished')->withTimestamps();
    }
}
