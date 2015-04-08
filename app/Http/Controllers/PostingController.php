<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Posting;
use App\Hospital;
use App\Hospitalcategory;
use App\District;
use App\Designation;


class PostingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$staff_id = $_GET['staff_id'];
		$status = [''=>'','Current Post'=>'Current Post','Previous Post'=>'Previous Post'];
		$postingAll	= Posting::where('staff_id','=',$staff_id)->orderBy('status')->paginate();
		$districtAll	= District::orderBy('name')->lists('name','id');
		$hospitalCategoryAll	= HospitalCategory::orderBy('name')->lists('name','id');
		$hospitalAll	= Hospital::orderBy('name')->lists('name','id');
		$designationAll	= Designation::orderBy('name')->lists('name','id');
		$index = $postingAll->perPage() * ($postingAll->currentPage()-1) + 1;

		return view('posting.index',compact('postingAll','index','status','staff_id','districtAll','hospitalCategoryAll','hospitalAll','designationAll')); 
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
			'designation_id'=>'required',
			'district_id'=>'required',
			'hospital_category_id'=>'required',
			'hospital_id'=>'required',
			'status'=>'required',
		];
		$this->validate($request, $rules);

		$request['doj'] = date('Y-m-d',strtotime($request['doj']));
		Posting::create($request->except('_token'));

		return redirect("posting?staff_id=".$request['staff_id']);
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
		$staff_id = $_GET['staff_id'];
		$status = [''=>'','Current Post'=>'Current Post','Previous Post'=>'Previous Post'];
		$postingById	= Posting::find($id);
		$postingAll		= Posting::where('staff_id','=',$staff_id)->orderBy('status')->paginate();
		$districtAll	= District::orderBy('name')->lists('name','id');
		$hospitalCategoryAll	= HospitalCategory::orderBy('name')->lists('name','id');
		$hospitalAll	= Hospital::orderBy('name')->lists('name','id');
		$designationAll	= Designation::orderBy('name')->lists('name','id');
		$index = $postingAll->perPage() * ($postingAll->currentPage()-1) + 1;

		return view('posting.edit',compact('postingAll','postingById','index','status','staff_id','districtAll','hospitalCategoryAll','hospitalAll','designationAll'));  
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
			'designation_id'=>'required',
			'district_id'=>'required',
			'hospital_category_id'=>'required',
			'hospital_id'=>'required',
			'status'=>'required',
		];
		
		$this->validate($request, $rules);
		$request['doj'] = date('Y-m-d',strtotime($request['doj']));

		$posting = Posting::find($id);
		$posting->update($request->except('_token'));

		return redirect("posting?staff_id=".$request['staff_id']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Posting::destroy($id);
		return redirect('posting');
	}

	public function hospitalByCat(){
		
		$hospital_category_id = $_GET['catId'];
		$hospitalByCat = Hospital::where('hospital_category_id','=',$hospital_category_id)->lists('name','id');
		echo "<option></option>";
		foreach ($hospitalByCat as $id => $name) {
			echo "<option value='$id'>$name</option>";
		}
	}

}
