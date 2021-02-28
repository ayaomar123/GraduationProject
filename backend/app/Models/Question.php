<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_body'
    ];

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function avgweight() {
        return $this->belongsTo(Answer::class);
    }

}
