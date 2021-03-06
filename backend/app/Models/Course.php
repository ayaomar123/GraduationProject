<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id',
        'trainer_id',
        'name',
        'slug',
        'status',
        'description',
        'image',
        'status',
        'cost',
        'hours'

    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }
}
