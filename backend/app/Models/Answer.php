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
        'answer',
        'weight',
        'answer_weight',
    ];
    public function question() {
        return $this->belongsTo(Question::class);
    }




}
