<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Hospital;
use App\District;
use App\HospitalCategory;

class HospitalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$type = [''=>'','I'=>'I','II'=>'II','III'=>'III'];
		$hospitalAll	= Hospital::orderBy('name')->paginate();
		$districtAll	= District::orderBy('name')->lists('name','id');
		$hospitalCategoryAll	= HospitalCategory::orderBy('name')->lists('name','id');
		$index = $hospitalAll->perPage() * ($hospitalAll->currentPage()-1) + 1;

		return view('hospital.index',compact('hospitalAll','index','type','districtAll','hospitalCategoryAll')); 
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
		$rules	= ['name'=>'required', 'district_id'=>'required', 'hospital_category_id'=>'required', 'type'=>'required'];
		$this->validate($request, $rules);

		$hospital = New Hospital();
		if($request->hasFile('photo1')){
			$extension = $request->file('photo1')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo1')->move('hospital/', $fileName);
			$hospital->photo1	= '/hospital/'.$fileName;
		}
		if($request->hasFile('photo2')){
			$extension = $request->file('photo2')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo2')->move('hospital/', $fileName);
			$hospital->photo2	= '/hospital/'.$fileName;
		}
		if($request->hasFile('photo3')){
			$extension = $request->file('photo3')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo3')->move('hospital/', $fileName);
			$hospital->photo3	= '/hospital/'.$fileName;
		}

		$hospital->name = $request['name'];
		$hospital->type = $request['type'];
		$hospital->district_id = $request['district_id'];
		$hospital->hospital_category_id = $request['hospital_category_id'];
		$hospital->description = $request['description'];

		$hospital->save();

		//Hospital::create($request->except('_token'));

		return redirect('hospital');
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
		$type = [''=>'','I'=>'I','II'=>'II','III'=>'III'];
		$hospitalAll	= Hospital::orderBy('name')->paginate();
		$hospitalById	= Hospital::find($id);
		$districtAll	= District::orderBy('name')->lists('name','id');
		$hospitalCategoryAll	= HospitalCategory::orderBy('name')->lists('name','id');
		$index = $hospitalAll->perPage() * ($hospitalAll->currentPage()-1) + 1;

		return view('hospital.edit',compact('hospitalById','hospitalAll','index','type','districtAll','hospitalCategoryAll')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required', 'district_id'=>'required', 'hospital_category_id'=>'required', 'type'=>'required'];
		$this->validate($request, $rules);

		$hospital = Hospital::find($id);
		if($request->hasFile('photo1')){
			$extension = $request->file('photo1')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo1')->move('hospital/', $fileName);
			$hospital->photo1	= '/hospital/'.$fileName;
		}
		if($request->hasFile('photo2')){
			$extension = $request->file('photo2')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo2')->move('hospital/', $fileName);
			$hospital->photo2	= '/hospital/'.$fileName;
		}
		if($request->hasFile('photo3')){
			$extension = $request->file('photo3')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('photo3')->move('hospital/', $fileName);
			$hospital->photo3	= '/hospital/'.$fileName;
		}

		$hospital->name = $request['name'];
		$hospital->type = $request['type'];
		$hospital->district_id = $request['district_id'];
		$hospital->hospital_category_id = $request['hospital_category_id'];
		$hospital->description = $request['description'];

		$hospital->save();
		//$hospital->update($request->except('_token'));

		return redirect('hospital');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Hospital::destroy($id);
		return redirect('hospital');
	}

}
