<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Skill;

class CourseController extends Controller
{
    //hiển thị khóa học a1, a2,.. theo slug
    public function showCourse($skillSlug, $courseSlug)
    {
        $skill = Skill::where('slug', $skillSlug)
            ->select('id', 'title')
            ->firstOrFail();

        $course = Course::where('slug', $courseSlug)
            ->where('skill_id', $skill->id)
            ->select('id', 'title', 'slug', 'imageUrl', 'description', 'introduce')
            ->firstOrFail();

        $lessons = Lesson::where('course_id', $course->id)
            ->get();

        // return view('layout.' . $skillSlug . '.course', [

        return view('layout.course', [
            'skillSlug' => $skillSlug,
            'skillTitle' => $skill->title,
            'course' => $course, // Sửa 'courses' thành 'course' để khớp với view
            'lessons' => $lessons,
        ]);
    }
}
