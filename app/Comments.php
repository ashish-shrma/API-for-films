<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
        protected $fillable = [
	'film_id',
	'user_id',
	'message',
	'name'
	];
}
