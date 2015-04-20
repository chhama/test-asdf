<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Staff;
use App\Hospital;
use App\Posting;
use App\District;
use App\HospitalCategory;
use App\Designation;

class StaffController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Name
		if(isset($_GET['name']) && $_GET['name'] != 'Name') { $name = "AND name LIKE '%".$_GET['name']."%' "; $name_view = $_GET['name']; } else { $name = ''; $name_view=''; } 
		
		// District Wise
		if(isset($_GET['district']) && $_GET['district'] != '') { 
			$getDistrict = $_GET['district']; $district_view = $_GET['district']; 
			$postingByDistrict = Posting::whereRaw("district_id = '$getDistrict' AND status='Current Post'")->groupBy('staff_id')->lists('staff_id');
			$district = implode(',',$postingByDistrict).',';

		} else { $district = ''; $district_view=''; }

		// Hospital Category Wise
		if(isset($_GET['hoscat']) && $_GET['hoscat'] != '') { 
			$getHosCat = $_GET['hoscat']; $hoscat_view = $_GET['hoscat']; 
			$postingByHosCat = Posting::whereRaw("hospital_category_id = '$getHosCat' AND status='Current Post'")->groupBy('staff_id')->lists('staff_id');
			$hoscat = implode(',',$postingByHosCat).',';

		} else { $hoscat = ''; $hoscat_view=''; }

		// Designation Wise
		if(isset($_GET['designation']) && $_GET['designation'] != '') { 
			$getDesignation = $_GET['designation']; $designation_view = $_GET['designation']; 
			$postingByDesignation = Posting::whereRaw("designation_id = '$getDesignation' AND status='Current Post'")->groupBy('staff_id')->lists('staff_id');
			$designation = implode(',',$postingByDesignation).',';

		} else { $designation = ''; $designation_view=''; }

		// Type
		if(isset($_GET['type']) && $_GET['type'] != '') { 
			$getType = $_GET['type']; $type_view = $_GET['type']; 
			$postingByType = Posting::whereRaw("type = '$getType' AND status='Current Post'")->groupBy('staff_id')->lists('staff_id');
			$type = implode(',',$postingByType).',';
		} else { $type = ''; $type_view=''; }

		$ids = $district.$hoscat.$designation.$type;
		$id =  array_unique(array_filter(explode(',',$ids)));

		//echo "<pre>"; print_r($id); exit;

		$designationAll 		= Designation::orderBy('name')->lists('name','id');
		$hospitalCategoryAll 	= HospitalCategory::orderBy('name')->lists('name','id');
		$districtAll 			= District::orderBy('name')->lists('name','id');
		if(isset($_GET['name'])){
			$staffAll				= Staff::orderBy('name')->whereRaw("id != '' $name")->whereIn('id',$id)->paginate();
		} else {
			$staffAll				= Staff::orderBy('name')->paginate();
		}

		$sex = [''=>'','Male'=>'Male','Female'=>'Female'];
		$jobType = [''=>'Type','Regular'=>'Regular','Contract'=>'Contract','Master Roll'=>'Master Roll'];
		$index = $staffAll->perPage() * ($staffAll->currentPage()-1) + 1;

		return view('staff.index',compact('staffAll',
										'sex',
										'index',
										'name_view',
										'jobType',
										'type_view',
										'districtAll',
										'district_view',
										'designation_view',
										'hoscat_view',
										'hospitalCategoryAll',
										'designationAll'
										));  
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
