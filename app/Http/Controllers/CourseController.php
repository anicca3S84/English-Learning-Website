<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    // hiển thị khóa học a1, a2,.. theo slug
    public function showCourse($skillSlug, $courseSlug)
    {
        $skill = Skill::where('slug', $skillSlug)
            ->select('id', 'title', 'slug')
            ->firstOrFail();

        $course = Course::where('slug', $courseSlug)
            ->where('skill_id', $skill->id)
            ->select('id', 'title', 'slug', 'imageUrl', 'description', 'introduce')
            ->firstOrFail();

        $lessons = Lesson::where('course_id', $course->id)
            ->when(Auth::check(), function ($query) {
                $query->with(['users' => function ($q) {
                    $q->where('user_id', Auth::id())
                        ->withPivot('is_finished');
                }]);
            })
            ->get();

        //     'id' => 1,
        // 'course_id' => 1,
        // 'title' => 'Lesson 1',
        // // các thuộc tính khác của lesson
        // 'users' => collect([
        //     (object) [
        //         'id' => 6,
        //         'name' => 'User hiện tại',
        //         'pivot' => (object) [
        //             'lesson_id' => 1,
        //             'user_id' => 6,
        //             'is_finished' => 1,
        //         ],
        //     ]
        // ]),

        $allSkills = Skill::select('id', 'title', 'slug')->get();

        $courses = Course::where('skill_id', $skill->id)
            ->select('id', 'title', 'slug')
            ->get();

        return view('layout.course', [
            'skillSlug' => $skillSlug,
            'courseSlug' => $courseSlug,
            'skill' => $skill,
            'course' => $course,
            'lessons' => $lessons,
            'allSkills' => $allSkills,
            'courses' => $courses
        ]);
    }
}
