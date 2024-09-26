<?php

namespace App\Models\Applicant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioData extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_pid' , 'nin' , 'nin_path' , 'passport' , 'last_name' , 'first_name' , 'gender' , 'dob' , 'state_of_origin' ,
        'lga_of_origin' , 'residence_state' , 'residence_lga' , 'address',
        'gsm'
    ];
}
