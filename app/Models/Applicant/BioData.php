<?php

namespace App\Models\Applicant;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function firstName(): Attribute
    {
        return Attribute::make(
            set: fn($value) => ucfirst($value)
        );
    }
    public function lastName(): Attribute
    {
        return Attribute::make(
            set: fn($value) => ucfirst($value)
        );
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_pid', 'pid');
    }
    public function skills(){
        return $this->hasMany(Experience::class, 'user_pid', 'user_pid');
    }

    public function qualification(){
        return $this->hasMany(Qualification::class, 'user_pid', 'user_pid');
    }

    public function program(){
        return $this->belongsTo(Programme::class, 'user_pid', 'user_pid');
    }

    

}
