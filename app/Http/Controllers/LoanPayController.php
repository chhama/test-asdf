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
		$month  = ['01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December'];
		$year	= array_combine(range(date('Y')-1,date('Y')+1),range(date('Y')-1,date('Y')+1));

		$loan_id 		= $request['loan_id'];
		$loanPayAll		= LoanPay::where('loan_id','=',$loan_id)->orderBy('id','desc')->paginate();
		$index 			= $loanPayAll->perPage() * ($loanPayAll->currentPage()-1) + 1;

		return view('loanpay.index',compact('loanHeadAll','index','loanPayAll','loan_id','month','year'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$month  = ['01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December'];
		$year	= array_combine(range(date('Y')-1,date('Y')+1),range(date('Y')-1,date('Y')+1));
		
		$generateLoanAll = LoanPay::orderBy('id','desc')->groupBy('created_at')->paginate();
		$index 	= $generateLoanAll->perPage() * ($generateLoanAll->currentPage()-1) + 1;

		return view('loanpay.generateloan',compact('month','year','generateLoanAll','index'));
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
		
		
		$loan 		= Loan::find($request['loan_id']);
		$loanPay 	= LoanPay::whereRaw("staff_id='$loan->staff_id' AND loan_id='$loan->id'")->sum('emi');
		$balance	= $loan->amount - $loanPay;

		if($balance < $loan->emi){
			$request['emi'] = $balance;
			$loan->status = 'Inactive';
			$loan->update();
		} 
		if($balance < $request['emi']){
			$request['emi'] = $balance;
			$loan->status = 'Inactive';
			$loan->update();	
		}

		$date 	= $request['year'].'-'.$request['month'].'-15';
		$loanPaySave = new LoanPay();
		$loanPaySave->loan_id = $request['loan_id'];
		$loanPaySave->staff_id = $loan->staff_id;
		$loanPaySave->emi = $request['emi'];
		$loanPaySave->created_at = $date;
		$loanPaySave->save();

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
		$month  = ['01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December'];
		$year	= array_combine(range(date('Y')-1,date('Y')+1),range(date('Y')-1,date('Y')+1));

		$loan_id 		= $request['loan_id'];
		$loanPayById	= LoanPay::find($id);
		$loanPayAll		= LoanPay::where('loan_id','=',$loan_id)->orderBy('id','desc')->paginate();
		$index 			= $loanPayAll->perPage() * ($loanPayAll->currentPage()-1) + 1;

		return view('loanpay.edit',compact('loanHeadAll','index','loanPayAll','loan_id','loanPayById','month','year'));
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
		$date 	= $request['year'].'-'.$request['month'].'-15';
		$loanPay->created_at = $date;
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

	public function generateloan(Request $request){
		$date 		= $request['year'].'-'.$request['month'].'-15';
		$loanPayCompare = LoanPay::where('created_at','=',$date)->count('id');
		if($loanPayCompare>0){
			return redirect()->back()->with(['message'=>date('F Y',strtotime($date)).' Loan is already Generated.']);
		}
		$loanAll 	= Loan::where('status','=','Active')->get();
		foreach ($loanAll as $loan) {
			$loanPay = LoanPay::whereRaw("loan_id='$loan->id' AND staff_id='$loan->staff_id'")->sum('emi');
			$balance = $loan->amount - $loanPay;
			
			$loanPay = new LoanPay();
			if($balance > $loan->emi){
				$loanPay->emi 	= $loan->emi;
			} else {
				$loanPay->emi 	= $balance;
				$loanStatus = Loan::find($loan->id)->status = 'Inactive';
				$loanStatus->update();
			}

			$loanPay->loan_id	= $loan->id;
			$loanPay->staff_id	= $loan->staff_id;
			$loanPay->created_at= $date;
			$loanPay->save();
		}
		return redirect()->back();
	}

}
