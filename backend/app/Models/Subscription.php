<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'course_id',
        'email',
        'phone',
        'notes'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
