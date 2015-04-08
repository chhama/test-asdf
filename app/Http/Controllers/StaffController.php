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

		$staff = New Staff();
		if($request->hasFile('photo')){
			$extension = $request->file('photo')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo')->move('upload/staff/', $fileName);
			$staff->photo	= '/upload/staff/'.$fileName;
		}
		$staff->name = $request['name'];
		$staff->fathers_name = $request['fathers_name'];
		$staff->sex = $request['sex'];
		$staff->qualification = $request['qualification'];
		$staff->address = $request['address'];
		$staff->phone = $request['phone'];
		$staff->doj = date('Y-m-d',strtotime($request['doj']));
		$staff->remark = $request['remark'];
		$staff->save();
		//Staff::create($request->except('_token'));

		return redirect('staffrecord');
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
		if($request->hasFile('photo')){
			$extension = $request->file('photo')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo')->move('upload/staff/', $fileName);
			$staff->photo	= '/upload/staff/'.$fileName;
		}
		$staff->name = $request['name'];
		$staff->fathers_name = $request['fathers_name'];
		$staff->sex = $request['sex'];
		$staff->qualification = $request['qualification'];
		$staff->address = $request['address'];
		$staff->phone = $request['phone'];
		$staff->doj = date('Y-m-d',strtotime($request['doj']));
		$staff->remark = $request['remark'];
		$staff->save();

		return redirect('staffrecord');
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
		return redirect('staffrecord');
	}

}
