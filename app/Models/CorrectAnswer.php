<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{

    protected $fillable = ['question_id', 'answer_id'];


    public function questions()
    {
        return $this->hasOne(Question::class);
    }

    public function answers()
    {
        return $this->hasOne(Answer::class);
    }
}
