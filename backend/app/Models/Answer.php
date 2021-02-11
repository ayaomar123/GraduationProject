<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $with = ['question'];
    protected $fillable = [
        'Question_id',
        'answer',
        'weight'
    ];
    public function question() {
        return $this->belongsTo(Question::class);
    }
}
