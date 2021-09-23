<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $table = 'professionals';
    protected $fillable = [
        'candidate_id', 'pro_country', 'years', 'company_name', 'position', 'from', 'to'
    ];
}
