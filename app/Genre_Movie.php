<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre_Movie extends Model
{
  	protected $table = 'genre_movie';
	protected $fillable = ['movie_id', 'genre_id'];
	public $timestamps = false;
	public function genre() {
		return $this->belongsTo('App\Genre');
	}
	public function film() {
		return $this->belongsTo('App\Movie');
	}  
}

