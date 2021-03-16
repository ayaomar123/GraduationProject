<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    protected $table= 'msg';
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'myMsg'
    ];
}
