<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personals';

    protected $fillable = [
        'trade', 'country', 'name', 'f_name', 'm_name', 'nationality', 'dob', 'pob', 'religion', 'marital_status', 'height', 'weight', 'present_address',
        'permanent_address', 'candidate_number', 'family_number', 'passport_number', 'issue_place', 'issue_date', 'expire_date', 'highest_edu', 'skill_training',
        'language_training'
    ];
}
