<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categoryAll	= Category::orderBy('name')->paginate();
		$index = $categoryAll->perPage() * ($categoryAll->currentPage()-1) + 1;

		return view('category.index',compact('categoryAll','index')); 
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

		Category::create($request->except('_token'));

		return redirect('category');
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
		$categoryAll	= Category::orderBy('name')->paginate();
		$categoryById	= Category::find($id);
		$index = $categoryAll->perPage() * ($categoryAll->currentPage()-1) + 1;

		return view('category.edit',compact('categoryAll','categoryById','index'));
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

		$category = Category::find($id);
		$category->update($request->except('_token'));

		return redirect('category');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Category::destroy($id);
		return redirect('category');
	}


}
