<?php

namespace App\Models\Applicant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_pid', 'skill' , 'certification' , 'year' , 'path' ,
    ];
}
