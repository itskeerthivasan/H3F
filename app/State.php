<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Get the university list by state.
     */
    public function universities()
    {
        return $this->hasMany('App\University');
    }
}
