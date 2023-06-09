<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExerciseHistory extends Model
{
    use HasFactory;

    protected $table = 'user_exercise_history';

    protected $fillable = [
        'exercise_id',
        'user_id',
        'weight',
        'date'
    ];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
