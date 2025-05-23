<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'type',
        'started_at',
        'expires_at',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
