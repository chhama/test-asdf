<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sex = [''=>'','Male'=>'Male','Female'=>'Female'];
		$staffAll	= Staff::orderBy('name')->paginate();
		$index = $staffAll->perPage() * ($staffAll->currentPage()-1) + 1;

		return view('staff.index',compact('staffAll','index','sex')); 
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
		$rules	= ['name'=>'required','sex'=>'required'];
		$this->validate($request, $rules);

		Staff::create($request->except('_token'));

		return redirect('staff');
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
		$sex = ['Male'=>'Male','Female'=>'Female'];
		$staffAll	= Staff::orderBy('name')->paginate();
		$staffById	= Staff::find($id);
		$index = $staffAll->perPage() * ($staffAll->currentPage()-1) + 1;

		return view('staff.edit',compact('staffById','staffAll','index','sex')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required','sex'=>'required'];
		$this->validate($request, $rules);

		$staff = Staff::find($id);
		$staff->update($request->except('_token'));

		return redirect('staff');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Staff::destroy($id);
		return redirect('staff');
	}

}
