<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $fillable = [
		'album_cat_id',
		'album_id',
		'user_id',
		'name',
		'photo_file',
		'directory'
	];

	public function albumcat(){
		return $this->belongsTo('App\AlbumCat','album_cat_id');
	}

	public function album(){
		return $this->belongsTo('App\Album','album_id');
	}

}
