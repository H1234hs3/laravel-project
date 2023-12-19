<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->belongsToMany(cources::class, 'cources_student',  'student_id','course_id');

    }
   

}
