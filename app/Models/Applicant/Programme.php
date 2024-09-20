<?php

namespace App\Models\Applicant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_pid',
        'program',
        'sub_program',
    ];
}
