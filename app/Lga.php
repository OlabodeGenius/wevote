<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    protected $fillable = ['name', 'id_state'];

    public function states() {
        return $this->belongTo('App\State', 'id_state');
    }
}
