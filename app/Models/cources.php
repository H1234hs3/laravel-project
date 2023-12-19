<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cources extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->belongsToMany(student::class, 'cources_student', 'student_id','course_id');
    
    }
   

}
