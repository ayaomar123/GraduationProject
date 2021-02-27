<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'question_id',
      'answer_id'
    ];


    public function questions() {
        return $this->belongsToMany(Question::class);
    }

    public function result() {
        return $this->belongsTo(User::class);
    }
    public function answers(){
        return $this->belongsTo(Answer::class,'results');
    }
}
