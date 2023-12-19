<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
    use HasFactory;
    public function Donors(){

        return $this->belongsToMany(Donors::class , '_donor_program','donors_id','program_id');
    }
}
