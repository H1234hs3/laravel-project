<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    use HasFactory;
    public function program(){

        return $this->belongsToMany(programs::class , '_donor_program','donors_id','program_id');
    }
}
