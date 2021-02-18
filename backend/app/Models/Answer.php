<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $with = ['question'];
    protected $fillable = [
        'question_id',
        'answer1',
        'weight1',
        'answer2',
        'weight2',
        'answer3',
        'weight3'
    ];
    public function question() {
        return $this->belongsTo(Question::class);
    }


}
