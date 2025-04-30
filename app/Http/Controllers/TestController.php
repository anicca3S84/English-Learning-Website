<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::with(['options' => function ($query) {
            $query->orderBy('option_order');
        }])->where('task_id', 3)->get();

        // Lưu vào session để chấm điểm sau này
        session(['questions' => $questions]);

        return view('test.question', [
            'questions' => $questions,
            'currentIndex' => 0,
            'totalQuestions' => $questions->count()
        ]);
    }

    public function showQuestion(Request $request)
    {
        $index = $request->query('index', 0);

        $questions = Question::with(['options' => function ($query) {
            $query->orderBy('option_order');
        }])->where('task_id', 3)->get();

        if ($index < 0) $index = 0;
        if ($index >= $questions->count()) $index = $questions->count() - 1;

        $currentQuestion = $questions[$index];

        session(['questions' => $questions]);

        return view('test.question', [
            'questions' => $questions,
            'currentQuestion' => $currentQuestion,
            'currentIndex' => $index,
            'totalQuestions' => $questions->count()
        ]);
    }

    public function submitTest(Request $request)
    {
        $answers = $request->input('answers');
        $correctAnswers = 0;
        $totalQuestions = count($answers);
    
        foreach ($answers as $index => $answerData) {
            // Lấy câu hỏi từ session
            $questions = session('questions');
            $question = $questions[$index] ?? null;
    
            if ($question && isset($question->options)) {
                foreach ($question->options as $option) {
                    if ($option->text === $answerData['answer'] && $option->is_correct == 1) {
                        $correctAnswers++;
                        break;
                    }
                }
            }
        }
    
        $percent = $totalQuestions > 0 ? ($correctAnswers / $totalQuestions) * 100 : 0;
    
        return response()->json([
            'correct' => $correctAnswers,
            'total' => $totalQuestions,
            'percent' => number_format($percent, 2),
        ]);
    }
    

    public function result()
    {
        $total = session('total_questions', 0);
        $correct = session('correct_answers', 0);
        $percentage = $total > 0 ? round(($correct / $total) * 100, 2) : 0;

        return view('test.question', compact('total', 'correct', 'percentage'));
    }
}
