<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $lessonId)
    {
        $request->validate([
            'comment' => 'required|string|max:2000',
        ]);

        $comment = Comments::create([
            'lesson_id' => $lessonId,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ]);

        // Load user để hiển thị thông tin avatar và tên
        $comment->load('user');

        return response()->json([
            'success' => true,
            'comment' => $comment
        ]);
    }
}
