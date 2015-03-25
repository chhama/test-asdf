<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\District;

class DistrictController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$districtAll	= District::orderBy('name')->paginate();
		$index = $districtAll->perPage() * ($districtAll->currentPage()-1) + 1;

		return view('district.index',compact('districtAll','index')); 
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
		$rules	= ['name'=>'required', 'code'=>'required'];
		$this->validate($request, $rules);

		District::create($request->except('_token'));

		return redirect('district');
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
		$districtAll	= District::orderBy('name')->paginate();
		$districtById	= District::find($id);
		$index = $districtAll->perPage() * ($districtAll->currentPage()-1) + 1;

		return view('district.edit',compact('districtAll','districtById','index'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required', 'code'=>'required'];
		$this->validate($request, $rules);

		$district = District::find($id);
		$district->update($request->except('_token'));

		return redirect('district');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		District::destroy($id);
		return redirect('district');
	}

}
