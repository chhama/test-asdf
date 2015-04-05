<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\AlbumCat;
use App\Album;
use App\Photo;

class GalleryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('gallery.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function album()
	{
		if(isset($_GET['acid'])) { 
			$acid = $_GET['acid'];
			$albums = Album::where('album_cat_id','=',$acid)->orderBy('name')->paginate();
		} else {  
			$albums = Album::orderBy('name')->paginate();
		}

		return view('gallery.album',compact('albums'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function photo()
	{
		$aid = $_GET['aid'];
		$album = Album::find($aid);
		$photos = Photo::where('album_id','=',$aid)->paginate();
		return view('gallery.photo',compact('photos','album'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
