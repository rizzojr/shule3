<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function correctAnswer()
    {
        return $this->hasOne(CorrectAnswer::class);
    }
}
