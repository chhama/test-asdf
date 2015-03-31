<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	protected $fillable = [
		'album_cat_id',
		'user_id',
		'name',
		'cover',
		'directory'
	];

	public function albumcat(){
		return $this->belongsTo('App\AlbumCat','album_cat_id');
	}
}
