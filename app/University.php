<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
	/**
     *  Get the state details of University
     *  Releationship: many to one (University to State)
     */
    public function state()
	{
	    return $this->belongsTo('App\State');
	}

	/**
     * Get the schools list by university.
     * Releationship: one to many (university to Schools)
     */
    public function schools()
    {
        return $this->hasMany('App\School');
    }

    /**
     * Get the Colleges list by university.
     *  Releationship: one to many (university to Colleges)
     */
    public function colleges()
    {
        return $this->hasMany('App\College');
    }
}
