<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Designation;

class DesignationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$type = [''=>'','Technical'=>'Technical','Non Technical'=>'Non Technical'];
		$designationAll	= Designation::orderBy('name')->paginate();
		$index = $designationAll->perPage() * ($designationAll->currentPage()-1) + 1;

		return view('designation.index',compact('designationAll','index','type')); 
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
		$rules	= ['name'=>'required', 'code'=>'required','type'=>'required'];
		$this->validate($request, $rules);

		Designation::create($request->except('_token'));

		return redirect('designation');
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
		$type = [''=>'','Technical'=>'Technical','Non Technical'=>'Non Technical'];
		$designationAll	= Designation::orderBy('name')->paginate();
		$designationById	= Designation::find($id);
		$index = $designationAll->perPage() * ($designationAll->currentPage()-1) + 1;

		return view('designation.edit',compact('designationAll','designationById','index','type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required', 'code'=>'required','type'=>'required'];
		$this->validate($request, $rules);

		$designation = Designation::find($id);
		$designation->update($request->except('_token'));

		return redirect('designation');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Designation::destroy($id);
		return redirect('designation');
	}

}
