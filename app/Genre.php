<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
        protected $fillable = [
	'name'
	];




	public function Movies()
	{
		
		return $this->belongsToMany('App\Movie');	
	}

}
