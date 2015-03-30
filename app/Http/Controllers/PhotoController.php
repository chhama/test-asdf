<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\AlbumCat;
use App\Album;
use App\Photo;

class PhotoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$album_id = $_GET['album_id'];
		$photoByAlbum = Photo::where('album_id','=',$album_id)->orderBy('id','desc')->paginate();
		$index = $photoByAlbum->perPage() * ($photoByAlbum->currentPage()-1) + 1;

		return View('photo.index',compact('photoByAlbum','album_id','albumAll','index')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules	= [
			'name' 	=> 'required',
		];
		$this->validate($request, $rules);

		$input 	= $request->all();
		$albumDir = Album::find($input['album_id']);

		$photo 	= New Photo();
		if($request->hasFile('photo_file')){
			$extension = $request->file('photo_file')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo_file')->move($albumDir->directory, $fileName);
			$photo->photo_file	= $fileName;
		}

		$photo->user_id			= \Auth::user()->id;
		$photo->directory 		= $albumDir->directory;
		$photo->name 			= $input['name'];
		$photo->album_cat_id 	= $input['album_cat_id'];
		$photo->album_id 		= $input['album_id'];
		$photo->save();

		return redirect("photo?album_id=".$input['album_id']);
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
		$album_id = $_GET['album_id'];
		$photoById = Photo::find($id);
		$photoByAlbum = Photo::where('album_id','=',$album_id)->orderBy('id','desc')->paginate();
		$index = $photoByAlbum->perPage() * ($photoByAlbum->currentPage()-1) + 1;

		return View('photo.edit',compact('photoById','photoByAlbum','album_id','albumAll','index')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= [
			'name' 	=> 'required',
		];
		$this->validate($request, $rules);

		$input 	= $request->all();
		$photo 	= Photo::find($id);

		if($request->hasFile('photo_file')){
			$extension = $request->file('photo_file')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo_file')->move($photo->directory, $fileName);
			$photo->photo_file	= $fileName;
		}

		$photo->name 	= $input['name'];
		$photo->save();

		return redirect("photo?album_id=".$photo->album_id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$album_id = Photo::find($id)->pluck('album_id');
		Photo::destroy($id);
		return redirect('photo?album_id='.$album_id);
	}

}
