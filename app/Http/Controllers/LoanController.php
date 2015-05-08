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
use App\LoanHead;
use App\Loan;

class LoanController extends Controller {

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
			$district = "AND district_id = '$getDistrict'";

		} else { $district = ''; $district_view=''; }

		// Hospital Category Wise
		if(isset($_GET['hoscat']) && $_GET['hoscat'] != '') { 
			$getHosCat = $_GET['hoscat']; $hoscat_view = $_GET['hoscat']; 
			$hosCat = "AND hospital_category_id = '$getHosCat'";

		} else { $hosCat = ''; $hoscat_view=''; }

		// Designation Wise
		if(isset($_GET['designation']) && $_GET['designation'] != '') { 
			$getDesignation = $_GET['designation']; $designation_view = $_GET['designation']; 
			$designation = "AND designation_id = '$getDesignation'";

		} else { $designation = ''; $designation_view=''; }

		// Type
		if(isset($_GET['type']) && $_GET['type'] != '') { 
			$getType = $_GET['type']; $type_view = $_GET['type']; 
			$type = "AND type = '$getType'";
		} else { $type = ''; $type_view=''; }


		$designationAll 		= Designation::orderBy('name')->lists('name','id');
		$hospitalCategoryAll 	= HospitalCategory::orderBy('name')->lists('name','id');
		$districtAll 			= District::orderBy('name')->lists('name','id');
		if(isset($_GET['name'])){
			$staffAll		= Staff::orderBy('name')->whereRaw("id != '' $name $type $designation $hosCat $district")->paginate();
		} else {
			$staffAll				= Staff::orderBy('name')->paginate();
		}

		$sex = [''=>'','Male'=>'Male','Female'=>'Female'];
		$jobType = [''=>'Type','Regular'=>'Regular','Contract'=>'Contract','Muster Roll'=>'Muster Roll'];
		$index = $staffAll->perPage() * ($staffAll->currentPage()-1) + 1;

		return view('loan.index',compact('staffAll',
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
		$staff_id = $_GET['staff_id'];
		$loanHeadAll	= LoanHead::orderBy('name')->lists('name','id');
		$loanAll		= Loan::where('staff_id','=',$staff_id)->orderBy('created_at')->paginate();
		$index 			= $loanAll->perPage() * ($loanAll->currentPage()-1) + 1;

		return view('loan.create',compact('loanHeadAll','index','staff_id','loanAll')); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules	= ['loan_head_id'=>'required','amount'=>'required', 'emi'=>'required'];
		$this->validate($request, $rules);

		Loan::create($request->except('_token'));

		return redirect()->back();
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
		$loanHeadAll	= LoanHead::orderBy('name')->lists('name','id');
		$loanAll		= Loan::where('staff_id','=',$staff_id)->orderBy('created_at')->paginate();
		$loanById		= Loan::find($id);
		$index 			= $loanAll->perPage() * ($loanAll->currentPage()-1) + 1;

		return view('loan.edit',compact('loanHeadAll','index','staff_id','loanAll','loanById')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['loan_head_id'=>'required','amount'=>'required', 'emi'=>'required'];
		$this->validate($request, $rules);

		$loan = Loan::find($id);
		$loan->update($request->except('_token'));

		return redirect("loan/create?staff_id=".$request['staff_id']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		Loan::destroy($id);
		return redirect()->back();
	}

}
