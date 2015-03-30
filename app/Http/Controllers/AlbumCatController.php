<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\AlbumCat;

class AlbumCatController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albumCatAll	= AlbumCat::orderBy('name')->paginate();
		$index = $albumCatAll->perPage() * ($albumCatAll->currentPage()-1) + 1;

		return view('albumcat.index',compact('albumCatAll','index')); 
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
		$rules	= ['name'=>'required'];
		$this->validate($request, $rules);
		$dir = uniqid();
		mkdir('upload/'.$dir);
		$request['directory'] = 'upload/'.$dir.'/';
		$request['user_id'] = \Auth::user()->id;
		AlbumCat::create($request->except('_token'));

		return redirect('albumcat');
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
		$albumCatAll	= AlbumCat::orderBy('name')->paginate();
		$albumCatById	= AlbumCat::find($id);
		$index = $albumCatAll->perPage() * ($albumCatAll->currentPage()-1) + 1;

		return view('albumcat.edit',compact('albumCatAll','albumCatById','index'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required'];
		$this->validate($request, $rules);

		$albumCat = AlbumCat::find($id);
		$request['user_id'] = \Auth::user()->id;
		$albumCat->update($request->except('_token'));

		return redirect('albumcat');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		AlbumCat::destroy($id);
		return redirect('albumcat');
	}

}
