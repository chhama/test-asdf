<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ApprovedPay;
use App\Designation;

class ApprovedPayController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$status = ['Active'=>'Active','Inactive'=>'Inactive'];
		$hospital_type = [''=>'','Normal'=>'Normal','Difficult'=>'Difficult','Very Difficult'=>'Very Difficult','HPD Normal'=>'HPD Normal','HPD Difficult'=>'HPD Difficult','HPD Very Difficult'=>'HPD Very Difficult'];
		$approvedPayAll	= ApprovedPay::where('status','=','Active')->orderBy('designation_id')->paginate();
		$designationAll	= Designation::orderBy('name')->lists('name','id');
		$index = $approvedPayAll->perPage() * ($approvedPayAll->currentPage()-1) + 1;

		return view('approvedpay.index',compact('approvedPayAll','index','hospital_type','designationAll','status'));
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
		$rules	= ['designation_id'=>'required','hospital_type'=>'required', 'amount'=>'required','status'=>'required'];
		$this->validate($request, $rules);

		ApprovedPay::create($request->except('_token'));

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
	public function edit($id, Request $request)
	{
		$status = ['Active'=>'Active','Inactive'=>'Inactive'];
		$hospital_type = [''=>'','Normal'=>'Normal','Difficult'=>'Difficult','Very Difficult'=>'Very Difficult','HPD Normal'=>'HPD Normal','HPD Difficult'=>'HPD Difficult','HPD Very Difficult'=>'HPD Very Difficult'];
		$approvedPayAll	= ApprovedPay::where('status','=','Active')->orderBy('designation_id')->paginate();
		$approvedPayById	= ApprovedPay::find($id);
		$designationAll	= Designation::orderBy('name')->lists('name','id');
		$index = $approvedPayAll->perPage() * ($approvedPayAll->currentPage()-1) + 1;

		return view('approvedpay.edit',compact('approvedPayAll','index','hospital_type','designationAll','approvedPayById','status'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['designation_id'=>'required','hospital_type'=>'required', 'amount'=>'required','status'=>'required'];
		$this->validate($request, $rules);

		$approvedPay = ApprovedPay::find($id);
		$approvedPay->update($request->except('_token'));

		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ApprovedPay::destroy($id);
		return redirect()->back();
	}

}
