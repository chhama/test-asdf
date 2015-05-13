<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ApprovedPay;
use App\GeneratePay;
use App\Designation;

class GeneratePayController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$approvedPayAll	= ApprovedPay::where('status','=','Active')->orderBy('hospital_type')->get();
		$generatePayAll	= GeneratePay::orderBy('approved_pay_id')->paginate();
		$designationAll	= Designation::orderBy('name')->lists('name','id');
		$index = $generatePayAll->perPage() * ($generatePayAll->currentPage()-1) + 1;

		return view('generatepay.index',compact('approvedPayAll','index','generatePayAll','designationAll'));
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
		$rules	= ['date'=>'required','approved_pay_id'=>'required'];
		$this->validate($request, $rules);
		$approvedPayById			= ApprovedPay::find($request['approved_pay_id']);
		$request['date'] 			= date('Y-m-d',strtotime('15-'.$request['date']));
		$request['designation_id'] 	= $approvedPayById->designation_id;
		$request['hospital_type'] 	= $approvedPayById->hospital_type;
		GeneratePay::create($request->except('_token'));

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
		$approvedPayAll	= ApprovedPay::where('status','=','Active')->orderBy('hospital_type')->get();
		$generatePayAll	= GeneratePay::orderBy('approved_pay_id')->paginate();
		$generatePayById	= GeneratePay::find($id);
		$designationAll	= Designation::orderBy('name')->lists('name','id');
		$index = $generatePayAll->perPage() * ($generatePayAll->currentPage()-1) + 1;

		return view('generatepay.edit',compact('generatePayById','approvedPayAll','index','generatePayAll','designationAll'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['date'=>'required','approved_pay_id'=>'required'];
		$this->validate($request, $rules);

		$generatePay 				= GeneratePay::find($id);
		$approvedPayById			= ApprovedPay::find($request['approved_pay_id']);
		$request['date'] 			= date('Y-m-d',strtotime('15-'.$request['date']));
		$request['designation_id'] 	= $approvedPayById->designation_id;
		$request['hospital_type'] 	= $approvedPayById->hospital_type;
		$generatePay->update($request->except('_token'));

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
		GeneratePay::destroy($id);
		return redirect()->back();
	}

}
