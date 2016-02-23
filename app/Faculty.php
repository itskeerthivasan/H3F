<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{	
	/**
	 * Get the details of faculty's department
	 * @return [type] [description]
	 */
    public function department(){
    	return $this->belongsTo('App\Department');
    }

    /**
     * [papers description]
     * Releationship: one to many (faculty to papers)
     * @return [data] [description]
     */
    public function papers()
    {
    	 return $this->hasMany(Paper::class);
    }


}
