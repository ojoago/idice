<?php

namespace App\Models\Applicant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_pid',
        'institution',
        'field',
        'year',
        'degree',
        'grade',
        'edited_by',
    ];
    

}
