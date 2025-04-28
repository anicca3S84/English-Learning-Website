<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $table = 'options';
    protected $fillable = [
        'question_id',
        'text',
        'is_correct',
        'option_order'
    ];
}
