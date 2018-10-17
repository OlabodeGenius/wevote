<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name', 'id_country'];

    public function lgas() {
        return $this->HasMany('App\Lga', 'id_state');
    }
 }