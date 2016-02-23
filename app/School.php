<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * Get the University Details
     */
    public function university()
	{
	    return $this->belongsTo('App\University');
	}

	/**
	 * [departments description]
	 * @return [object] [departments of school]
	 * Releationship: Polymorphic Relations (schools morph to departments)
	 */
	public function departments() {

    	return $this->morphMany(Department::class,'departmentof');

    }
}
