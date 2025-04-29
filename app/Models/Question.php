<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class)->orderBy('option_order');
    }
}