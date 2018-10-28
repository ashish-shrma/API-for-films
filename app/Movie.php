<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
	'name',
	'slug',
	'description',
	'release_date',
	'rating',
	'ticket_price',
	'country',
	'genre',
	'photo',
	];


}
