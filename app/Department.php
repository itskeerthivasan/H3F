<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	/**
	 * [departmentof description]
	 * Releationship: Polymorphic Relations (morphto (departments table: department oftype))
	 * @return [data] [description]
	 */
    public function departmentof()
    {
    	return $this->MorphTo();
    }

    /**
     * [faculties description]
     * Releationship: one to many (department to faculties)
     * @return [data] [description]
     */
    public function faculties()
    {
    	 return $this->hasMany(Faculty::class);
    }
}
