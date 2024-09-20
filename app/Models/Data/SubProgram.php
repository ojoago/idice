<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProgram extends Model
{
    use HasFactory;

    protected $fillable  = [
        'program_pid',
        'pid',
        'name',
    ];
    

    


}
