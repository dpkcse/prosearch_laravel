<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    protected $fillable = [
        'candidate_id', 'english', 'bangla', 'arabic', 'hindi', 'urdu', 'japanese', 'others'
    ];
}
