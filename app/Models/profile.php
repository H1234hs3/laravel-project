<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'job',
        'phone',
        'description',
       
      ];
    public function client()
    {
        return $this->belongsTo(client::class);
    }

}
