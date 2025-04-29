<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function showPreparation($taskId)
{
    $task = Task::with(['questions.options'])->findOrFail($taskId);

    return view('tasks.preparation', compact('task'));
}

}