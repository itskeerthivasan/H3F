<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
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
	 * 
	 * @return [json] [departments of college]
	 *  Releationship: Polymorphic Relations (colleges morph to departments)
	 */
	public function departments() 
	{
    	return $this->morphMany(Department::class,'departmentof');
    }
}
