<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['candidate_id', 'voter_id', 'state_id', 'has_vote'];
}
