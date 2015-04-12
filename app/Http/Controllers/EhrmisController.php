<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Hospital;
use App\Staff;
use App\Posting;
use App\District;
use App\HospitalCategory;

class EhrmisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function facilities()
	{
		if(isset($_GET['district']) && $_GET['district'] != '') { $district_id = "AND district_id='".$_GET['district']."' "; $district_id=$_GET['district']; } else { $district_id = ''; } 
		if(isset($_GET['category']) && $_GET['category']!= '') { $hospital_category_id = "AND hospital_category_id='".$_GET['category']."' "; $hospital_category_id=$_GET['category']; } else { $hospital_category_id = ''; } 
		if(isset($_GET['type']) && $_GET['type'] != '') { $type = "AND type = '".$_GET['type']."' "; $type_view = $_GET['type']; } else { $type = ''; $type_view=''; } 
		if(isset($_GET['name']) && $_GET['name'] != 'Name') { $name = "AND name LIKE '%".$_GET['name']."%' "; $name_view = $_GET['name']; } else { $name = ''; $name_view=''; } 

		$districtAll 			= District::orderBy('name')->lists('name','id');
		$hospitalCategoryAll 	= HospitalCategory::orderBy('name')->lists('name','id');
		$hosType = [''=>'Type','Normal'=>'Normal','Difficult'=>'Difficult','Very Difficult'=>'Very Difficult','HPD Normal'=>'HPD Normal','HPD Difficult'=>'HPD Difficult','HPD Very Difficult'=>'HPD Very Difficult'];

		$hospitalAll			= Hospital::orderBy('name')->whereRaw("id != '' $name $district_id $hospital_category_id $type")->paginate();
		$index = $hospitalAll->perPage() * ($hospitalAll->currentPage()-1) + 1;

		return view('ehrmis.facilities',compact('hospitalAll','index','districtAll','hospitalCategoryAll','hosType','district_id','hospital_category_id','type_view','name_view'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function facdetail()
	{
		$id = $_GET['id'];
		$hospitalById	= Hospital::find($id);
		$postingByHos	= Posting::where('hospital_id','=',$id)
								 ->where('status','=','Current Post')
								 ->get();
		$index = 1;
		return view('ehrmis.facdetail',compact('hospitalById','postingByHos','index'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function hr()
	{
		$staffAll	= Staff::orderBy('name')->paginate();
		$index = $staffAll->perPage() * ($staffAll->currentPage()-1) + 1;

		return view('ehrmis.hr',compact('staffAll','index')); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function hrdetail()
	{
		$id = $_GET['id'];
		$index = 1;
		$staffById	= Staff::find($id);
		$postingAll = Posting::where('staff_id','=',$id)->orderBy('status')->get();
		return view('ehrmis.hrdetail',compact('staffById','postingAll','index')); 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
