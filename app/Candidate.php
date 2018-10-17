<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'name', 'party_id', 'lga_id', 'state_id', 'photo', 'bio', 'candidate_type', 
    ];
}
