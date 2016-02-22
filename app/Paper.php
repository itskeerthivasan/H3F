<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    /**
	 * Get the details of paper's faculty details
	 * @return [type] [description]
	 */
    public function faculty(){
    	return $this->belongsTo('App\Faculty');
    }
}
