<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'cours',
        'speciality',
        'success_id'
    ];

    public function successes(): BelongsTo
    {
        return$this->belongsTo(Success::class);
    }

}

