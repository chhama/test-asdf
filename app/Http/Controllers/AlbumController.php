<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\AlbumCat;
use App\Album;

class AlbumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albumCatAll = AlbumCat::orderBy('name')->lists('name','id');
		$albumAll = Album::orderBy('name')->paginate();
		$index = $albumAll->perPage() * ($albumAll->currentPage()-1) + 1;
		return View('album.index',compact('albumAll','index','albumCatAll'));
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
			'album_cat_id' => 'required'
		];
		$this->validate($request, $rules);

		$input 	= $request->all();
		$album 	= New Album();

		$albumCatDir = AlbumCat::find($input['album_cat_id']);
		$albumDir = $albumCatDir->directory.uniqid().'/';
		mkdir($albumDir);

		if($request->hasFile('cover')){
			$extension = $request->file('cover')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('cover')->move($albumDir, $fileName);
			$album->cover	= $fileName;
		}

		$album->directory 	= $albumDir;
		$album->name 		= $input['name'];
		$album->album_cat_id = $input['album_cat_id'];
		$album->save();

		return redirect('album');

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
		$albumCatAll = AlbumCat::orderBy('name')->lists('name','id');
		$albumById	= Album::find($id);
		$albumAll = Album::orderBy('name')->paginate();
		$index = $albumAll->perPage() * ($albumAll->currentPage()-1) + 1;
		return View('album.edit',compact('albumById','albumAll','index','albumCatAll'));
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
			'name' 	=> 'required'
		];
		$this->validate($request, $rules);

		$input 	= $request->all();
		$album 	= Album::find($id);

		if($request->hasFile('cover')){
			$extension = $request->file('cover')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('cover')->move($album->directory, $fileName);
			$album->cover	= $fileName;
		}

		$album->name 	= $input['name'];
		$album->save();

		return redirect('album');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Album::destroy($id);
		return redirect('album');
	}

}
