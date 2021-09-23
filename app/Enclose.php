<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enclose extends Model
{
    protected $table = 'encloses';

    protected $fillable = [
        'candidate_id', 'passport', 'photo', 'education', 'experience', 'langu', 'police', 'skill', 'medical', 'idcard'
    ];
}
