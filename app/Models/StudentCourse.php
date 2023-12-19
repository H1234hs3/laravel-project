<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;
    // public function student(): BelongsTo
    // {
    //     return $this->belongsTo(student::class, 'student_id');
    // }
    // public function cources(): BelongsTo
    // {
    //     return $this->belongsTo(cources::class, 'course_id');
    // }
    // public function cources() {
    //     return $this->hasMany(cources::class);
    // }
    // public function student() {
    //     return $this->hasMany(student::class);
    // }
}
