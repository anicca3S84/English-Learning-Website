<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Skill;
use App\Models\Task;
use App\Models\Question;
use App\Models\Option;

class LessonController extends Controller
{
    public function index()
    {
        return Lesson::all();
    }

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return response()->json([
            'id' => $lesson->id,
            'courseId' => $lesson->courseId,
            'title' => $lesson->title,
            'slug' => $lesson->slug,
            'created_at' => $lesson->created_at,
            'updated_at' => $lesson->updated_at,
            'content' => $lesson->content, // Trả về object thay vì raw JSON string
        ]);
    }

    public function showLesson($skillSlug, $courseSlug, $lessonSlug)
    {
        $skill = Skill::where('slug', $skillSlug)
            ->select('id', 'title')
            ->firstOrFail();

        $course = Course::where('slug', $courseSlug)
            ->where('skill_id', $skill->id)
            ->select('title', 'skill_id')
            ->firstOrFail();

        $lesson = Lesson::where('slug', $lessonSlug)->firstOrFail();

        $tasks = Task::where('lesson_id', $lesson->id)
            ->with(['questions.options' => function ($query) {
                $query->orderBy('option_order');
            }])
            ->orderBy('task_order')
            ->get();

        $view = $skillSlug === 'grammar' ? 'layout.grammar-lesson' : 'layout.lesson';

        return view($view, [
            'skillTitle' => $skill->title,
            'course' => $course,
            'lesson' => $lesson,
            'lessonSlug' => $lessonSlug,
            'tasks' => $tasks,
        ]);
    }

    
}
