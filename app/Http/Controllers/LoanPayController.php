<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\LoanPay;
use App\Loan;

class LoanPayController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$loan_id 		= $request['loan_id'];
		$loanPayAll		= LoanPay::where('loan_id','=',$loan_id)->orderBy('created_at')->paginate();
		$index 			= $loanPayAll->perPage() * ($loanPayAll->currentPage()-1) + 1;

		return view('loanpay.index',compact('loanHeadAll','index','loanPayAll','loan_id'));
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
		$rules	= ['emi'=>'required'];
		$this->validate($request, $rules);
		
		$request['staff_id'] = Loan::find($request['loan_id'])->staff_id;
		LoanPay::create($request->except('_token'));

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
		$loan_id 		= $request['loan_id'];
		$loanPayById	= LoanPay::find($id);
		$loanPayAll		= LoanPay::where('loan_id','=',$loan_id)->orderBy('created_at')->paginate();
		$index 			= $loanPayAll->perPage() * ($loanPayAll->currentPage()-1) + 1;

		return view('loanpay.edit',compact('loanHeadAll','index','loanPayAll','loan_id','loanPayById'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['emi'=>'required'];
		$this->validate($request, $rules);

		$loanPay = LoanPay::find($id);
		$loanPay->update($request->except('_token'));

		return redirect("loanpay?loan_id=".$request['loan_id']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		LoanPay::destroy($id);
		return redirect()->back();
	}

}
